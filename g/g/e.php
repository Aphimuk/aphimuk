<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>aphimuk</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Hell Side: พื้นหลังมืดสนิทและดุดัน */
        body { 
            background-color: #0b0b0b; 
            color: #eeeeee; 
            font-family: 'Tahoma', sans-serif; 
            padding: 30px;
        }
        h1 { text-align: center; color: #fff; text-shadow: 0 0 10px #ff4d4d; }

        .container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-bottom: 30px; }
        
        /* Heaven Side: กล่องกราฟที่ดูเรืองแสงและสะอาดตา */
        .chart-box { 
            width: 400px; 
            background: #1a1a1a; 
            padding: 20px; 
            border-radius: 15px; 
            border: 1px solid #333;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.05);
        }

        table { border-collapse: collapse; width: 100%; max-width: 600px; margin: 0 auto; background: #111; }
        th, td { border: 1px solid #333; padding: 12px; text-align: left; }
        th { background-color: #ff4d4d; color: white; } /* สีแดงนรกตัดกับข้อมูล */
        tr:nth-child(even) { background-color: #1a1a1a; }
        tr:hover { background-color: #222; }
    </style>
</head>
<body>

<h1>อภิมุข แสงดอกไม้ (แฟร้งค์)</h1>

<?php
include_once("connectdb.php");
$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`";
$rs = mysqli_query($conn, $sql);

$labels = [];
$values = [];

while ($data = mysqli_fetch_array($rs)) {
    $labels[] = $data['p_country'];
    $values[] = $data['total'];
}
?>

<div class="container">
    <div class="chart-box"><canvas id="barChart"></canvas></div>
    <div class="chart-box"><canvas id="pieChart"></canvas></div>
</div>

<table>
    <tr>
        <th>ประเทศ</th>
        <th>ยอดขาย</th>
    </tr>
    <?php foreach ($labels as $key => $val): ?>
    <tr>
        <td><?php echo $val; ?></td>
        <td align="right"><?php echo number_format($values[$key], 2); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<script>
const ctxBar = document.getElementById('barChart');
const ctxPie = document.getElementById('pieChart');

// สีแบบ Heaven (ขาว/ฟ้า/ชมพูเรืองแสง) ตัดกับ Hell
const heavenColors = [
    'rgba(255, 255, 255, 0.9)', // ขาวบริสุทธิ์
    'rgba(0, 212, 255, 0.8)',   // ฟ้าสวรรค์
    'rgba(255, 0, 127, 0.8)',   // ชมพูนีออน
    'rgba(189, 147, 249, 0.8)', // ม่วงอ่อน
    'rgba(80, 250, 123, 0.8)'   // เขียวเรืองแสง
];

const chartData = {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
        data: <?php echo json_encode($values); ?>,
        backgroundColor: heavenColors,
        borderColor: '#fff',
        borderWidth: 1
    }]
};

// กราฟแท่ง
new Chart(ctxBar, {
    type: 'bar',
    data: chartData,
    options: {
        plugins: { legend: { display: false } },
        scales: {
            y: { grid: { color: '#333' }, ticks: { color: '#fff' } },
            x: { ticks: { color: '#fff' } }
        }
    }
});

// กราฟวงกลม
new Chart(ctxPie, {
    type: 'pie',
    data: chartData,
    options: {
        plugins: { 
            legend: { labels: { color: '#fff' } } 
        }
    }
});
</script>

</body>
</html>