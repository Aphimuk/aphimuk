<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบหลังบ้าน - อภิมุข แสงดอกไม้(แฟร้งค์)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f5f7fb;
            overflow-x: hidden;
        }
        /* Sidebar Style */
        .sidebar {
            min-height: 100vh;
            background: #ffffff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
            z-index: 100;
        }
        .nav-link {
            color: #555;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        .nav-link:hover {
            background-color: #e9ecef;
            color: #0d6efd;
            transform: translateX(5px);
        }
        .nav-link.active-menu {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }
        .nav-link i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        /* Content Area */
        .main-content {
            padding: 30px;
        }
        .stat-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary d-md-none">
    <div class="container-fluid">
        <span class="navbar-brand">ระบบจัดการร้านค้า</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                    <li class="nav-item mb-3 px-3 text-muted">
                        <small>ผู้ใช้งาน: <strong class="text-dark"><?php echo $_SESSION['aname']; ?></strong></small>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active-menu" href="#">
                            <i class="bi bi-speedometer2"></i> หน้าหลัก
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <i class="bi bi-box-seam"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="bi bi-cart-check"></i> จัดการออเดอร์
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">
                            <i class="bi bi-people"></i> จัดการลูกค้า
                        </a>
                    </li>
                    
                    <hr class="my-3">
                    
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">
                            <i class="bi bi-box-arrow-right"></i> ออกจากระบบ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">ยินดีต้อนรับ, <?php echo $_SESSION['aname']; ?></h1>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card stat-card bg-white h-100 p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle text-primary">
                                <i class="bi bi-box-seam fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-muted mb-1">เมนูสินค้า</h6>
                                <a href="products.php" class="stretched-link text-decoration-none fw-bold text-dark">ไปที่จัดการสินค้า &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card stat-card bg-white h-100 p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle text-success">
                                <i class="bi bi-cart-check fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-muted mb-1">เมนูออเดอร์</h6>
                                <a href="orders.php" class="stretched-link text-decoration-none fw-bold text-dark">ไปที่จัดการออเดอร์ &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card stat-card bg-white h-100 p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-warning">
                                <i class="bi bi-people fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-muted mb-1">เมนูลูกค้า</h6>
                                <a href="customers.php" class="stretched-link text-decoration-none fw-bold text-dark">ไปที่จัดการลูกค้า &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-5 text-center text-muted">
                    <i class="bi bi-laptop display-1 mb-3"></i>
                    <h4>พร้อมสำหรับการทำงาน</h4>
                    <p>เลือกเมนูทางฝั่งซ้ายเพื่อเริ่มจัดการข้อมูล</p>
                </div>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>