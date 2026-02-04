<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>aphimuk</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Theme: Saint & Demon (Dark, Gold, Purple) */
        body { background: #050505; color: #d4af37; font-family: 'Segoe UI', sans-serif; padding: 20px; }
        h1 { text-align: center; text-transform: uppercase; letter-spacing: 3px; color: #fff; text-shadow: 0 0 15px #7b2ff7; }
        
        .dashboard { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-bottom: 40px; }
        .chart-box { 
            width: 380px; background: #0f0f0f; padding: 25px; border-radius: 20px;
            border: 1px solid #331a4d; box-shadow: 0 0 25px rgba(123, 47, 247, 0.2);
        }

        table { border-collapse: collapse; width: 100%; max-width: 500px; margin: 0 auto; background: #000; color: #fff; border: 1px solid #d4af37; }
        th { background: #d4af37; color: #000; padding: 12px; }
        td { border: 1px solid #222; padding: 10px; text-align: center; }
        tr:hover { background: #1a0033; color: #ff4d4d; }
    </style>
</head>
<body>

<h1>อภิมุข แสงดอกไม้(แฟร้งค์)</h1>

<?php
include_once("connectdb.php");
$sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
$rs = mysqli_query($conn, $sql);

$months = []; $sales = [];
$monthNames = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

while ($data = mysqli_fetch_array($rs)) {
    $months[] = $monthNames[$data['Month'] - 1]; // แปลงเลขเดือนเป็นชื่อเดือน
    $sales[] = $data['Total_Sales'];
}
?>

<div class="dashboard">
    <div class="chart-box"><canvas id="barChart"></canvas></div>
    <div class="chart-box"><canvas id="doughnutChart"></canvas></div>
</div>

<table>
    <tr><th>เดือน</th><th>ยอดขาย (ทอง)</th></tr>
    <?php foreach ($months as $key => $m): ?>
    <tr>
        <td><?php echo $m; ?></td>
        <td align="right"><?php echo number_format($sales[$key], 2); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<script>
const labels = <?php echo json_encode($months); ?>;
const data = <?php echo json_encode($sales); ?>;

// สีธีม: ทองนักบุญ และ ม่วง/แดงปีศาจ
const colors = ['#d4af37', '#7b2ff7', '#ff003c', '#1a1a1a', '#ffffff', '#4d0000'];

const config = (type) => ({
    type: type,
    data: {
        labels: labels,
        datasets: [{
            label: 'Sales',
            data: data,
            backgroundColor: colors,
            borderColor: '#000',
            hoverOffset: 20
        }]
    },
    options: {
        plugins: { 
            legend: { labels: { color: '#d4af37', font: { size: 12 } } }
        },
        scales: type === 'bar' ? {
            y: { grid: { color: '#222' }, ticks: { color: '#fff' } },
            x: { ticks: { color: '#fff' } }
        } : {}
    }
});

new Chart(document.getElementById('barChart'), config('bar'));
new Chart(document.getElementById('doughnutChart'), config('doughnut'));
</script>

</body>
</html>