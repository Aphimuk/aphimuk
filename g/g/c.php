<!doctype html>
<html lang="th" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aphimuk - Supermarket Data</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #0b0e14; /* มืดสนิท */
            color: #e0e0e0;
        }
        .card {
            background-color: #161b22;
            border: 1px solid #30363d;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
        .table {
            color: #d1d5db;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0, 255, 153, 0.05) !important; /* สีเขียวนีออนจางๆ */
        }
        .text-vibrant {
            color: #00ff99; /* สีเขียวสว่างสดใส */
            text-shadow: 0 0 10px rgba(0, 255, 153, 0.3);
        }
        .badge-custom {
            background-color: #7000ff; /* สีม่วงสด */
            color: white;
        }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="text-vibrant fw-bold">อภิมุข แสงดอกไม้ (แฟร้งค์)</h1>
        <p class="text-muted">66010914024</p>
    </div>

    <div class="card p-4 mb-4">
        <form method="post" action="" class="row g-3">
            <div class="col-auto">
                <label class="form-label">ค้นหาข้อมูล:</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="a" class="form-control" placeholder="พิมพ์คำค้นหา..." autofocus value="<?php echo @$_POST['a']; ?>">
            </div>
            <div class="col-auto">
                <button type="submit" name="Submit" class="btn btn-primary px-4 shadow">ตกลง</button>
            </div>
        </form>
    </div>

    <div class="card p-4">
        <div class="table-responsive">
            <table id="myTable" class="table table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>ชื่อสินค้า</th>
                        <th>ประเภท</th>
                        <th>วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน</th>
                        <th class="text-center">รูปภาพ</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once("connectdb.php");
                @$kw = $_POST['a'];
                $sql = "SELECT * FROM `popsupermarket` WHERE p_order_id LIKE '{$kw}' OR p_product_name LIKE '%{$kw}%' OR p_category LIKE '%{$kw}%' OR p_country LIKE '%{$kw}%' ";
                $rs = mysqli_query($conn, $sql);
                $total = 0;
                while ($data = mysqli_fetch_array($rs)){
                    $total += $data['p_amount'];
                ?>
                    <tr>
                        <td><span class="badge badge-custom"><?php echo $data['p_order_id'];?></span></td>
                        <td class="fw-bold"><?php echo $data['p_product_name'];?></td>
                        <td><?php echo $data['p_category'];?></td>
                        <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                        <td><?php echo $data['p_country'];?></td>
                        <td class="text-end text-vibrant fw-bold"><?php echo number_format($data['p_amount'], 2);?></td>
                        <td class="text-center">
                            <img src="images/<?php echo $data['p_product_name']; ?>.jpg" 
                                 width="45" class="rounded shadow-sm" 
                                 onerror="this.src='https://via.placeholder.com/45?text=No+Img'">
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
                <tfoot class="table-dark">
                    <tr>
                        <th colspan="5" class="text-end">ยอดรวมทั้งสิ้น:</th>
                        <th class="text-end text-warning h5"><?php echo number_format($total, 2);?></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json"
            },
            "pageLength": 10,
            "order": [[ 0, "desc" ]]
        });
    });
</script>

<?php mysqli_close($conn); ?>
</body>
</html>