<?php
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - ระบบหลังบ้าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Prompt', sans-serif; background-color: #f5f7fb; overflow-x: hidden; }
        .sidebar { min-height: 100vh; background: #ffffff; box-shadow: 2px 0 10px rgba(0,0,0,0.05); z-index: 100; }
        .nav-link { color: #555; padding: 12px 20px; border-radius: 8px; margin-bottom: 5px; transition: all 0.3s; }
        .nav-link:hover { background-color: #e9ecef; color: #0d6efd; transform: translateX(5px); }
        .nav-link.active-menu { background-color: #e7f1ff; color: #0d6efd; font-weight: 600; }
        .nav-link i { margin-right: 10px; font-size: 1.1rem; }
        .main-content { padding: 30px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary d-md-none">
    <div class="container-fluid">
        <span class="navbar-brand">จัดการออเดอร์</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"><span class="navbar-toggler-icon"></span></button>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse pt-3">
            <div class="text-center mb-4 py-3 border-bottom">
                <h5 class="fw-bold text-primary">ระบบหลังบ้าน</h5>
                <small class="text-muted">Admin Panel</small>
            </div>
            <div class="position-sticky">
                <ul class="nav flex-column px-2">
                    <li class="nav-item mb-3 px-3 text-muted"><small>ผู้ใช้งาน: <strong class="text-dark"><?php echo $_SESSION['aname']; ?></strong></small></li>
                    <li class="nav-item"><a class="nav-link" href="index2.php"><i class="bi bi-speedometer2"></i> หน้าหลัก</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php"><i class="bi bi-box-seam"></i> จัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link active-menu" href="orders.php"><i class="bi bi-cart-check"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people"></i> จัดการลูกค้า</a></li>
                    <hr class="my-3">
                    <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">รายการสั่งซื้อ (Orders)</h1>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>เลขที่ใบสั่งซื้อ</th>
                                    <th>ชื่อลูกค้า</th>
                                    <th>ราคารวม</th>
                                    <th>วันที่สั่งซื้อ</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // --- แก้ไข SQL ตรงนี้ให้ตรงกับชื่อตารางของคุณ ---
                                // ตัวอย่าง: JOIN ตาราง orders กับ customers
                                $sql = "SELECT * FROM `orders` ORDER BY o_id DESC"; 
                                $rs = mysqli_query($conn, $sql);
                                
                                if(mysqli_num_rows($rs) > 0){
                                    while($data = mysqli_fetch_array($rs)){
                            ?>
                                <tr>
                                    <td>#<?php echo str_pad($data['o_id'], 5, '0', STR_PAD_LEFT); ?></td>
                                    <td><?php echo $data['o_name']; ?></td>
                                    <td><?php echo number_format($data['o_total'],0); ?> บาท</td>
                                    <td><?php echo date("d/m/Y H:i", strtotime($data['o_dttm'])); ?></td>
                                    <td>
                                        <span class="badge bg-secondary">รอตรวจสอบ</span>
                                        </td>
                                    <td>
                                        <a href="order_detail.php?id=<?php echo $data['o_id']; ?>" class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i> ดูรายละเอียด</a>
                                    </td>
                                </tr>
                            <?php 
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center py-4 text-muted'>ยังไม่มีรายการสั่งซื้อ</td></tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>