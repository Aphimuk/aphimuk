<?php
    include_once("check_login.php");
    include_once("connectdb.php"); // เรียกใช้ไฟล์เชื่อมต่อฐานข้อมูล
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - ระบบหลังบ้าน</title>
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
        <span class="navbar-brand">จัดการสินค้า</span>
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
                    <li class="nav-item"><a class="nav-link active-menu" href="products.php"><i class="bi bi-box-seam"></i> จัดการสินค้า</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php"><i class="bi bi-cart-check"></i> จัดการออเดอร์</a></li>
                    <li class="nav-item"><a class="nav-link" href="customers.php"><i class="bi bi-people"></i> จัดการลูกค้า</a></li>
                    <hr class="my-3">
                    <li class="nav-item"><a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a></li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">จัดการข้อมูลสินค้า</h1>
                <a href="form_product.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i> เพิ่มสินค้าใหม่</a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคา</th>
                                    <th>รายละเอียด</th>
                                    <th width="150">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // --- แก้ไข SQL ตรงนี้ให้ตรงกับชื่อตารางของคุณ ---
                                $sql = "SELECT * FROM `products` ORDER BY p_id DESC"; 
                                $rs = mysqli_query($conn, $sql);
                                
                                if(mysqli_num_rows($rs) > 0){
                                    while($data = mysqli_fetch_array($rs)){
                            ?>
                                <tr>
                                    <td>
                                        <img src="images/<?php echo $data['p_img']; ?>" width="50" class="rounded" onerror="this.src='https://via.placeholder.com/50'"> 
                                    </td>
                                    <td class="fw-bold"><?php echo $data['p_name']; ?></td>
                                    <td class="text-primary"><?php echo number_format($data['p_price'],0); ?> บาท</td>
                                    <td><?php echo mb_substr($data['p_detail'], 0, 30); ?>...</td>
                                    <td>
                                        <a href="form_product.php?id=<?php echo $data['p_id']; ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                                        <a href="delete_product.php?id=<?php echo $data['p_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('ยืนยันการลบ?');"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php 
                                    }
                                } else {
                                    echo "<tr><td colspan='5' class='text-center py-4 text-muted'>ไม่พบข้อมูลสินค้า</td></tr>";
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