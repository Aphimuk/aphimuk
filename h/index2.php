<?php
	include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการระบบ - อภิมุข แสงดอกไม้(แฟร้งค์)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
        }
        .menu-card {
            transition: transform 0.2s;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            color: #0d6efd;
        }
        .navbar-brand {
            font-weight: 600;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">ระบบหลังบ้าน (Admin)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
            <span class="nav-link active">
                <i class="bi bi-person-circle"></i> สวัสดี, <?php echo $_SESSION['aname']; ?>
            </span>
        </li>
        <li class="nav-item ms-lg-3">
            <a href="logout.php" class="btn btn-danger btn-sm rounded-pill px-3">
                <i class="bi bi-box-arrow-right"></i> ออกจากระบบ
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-secondary">แผงควบคุมหลัก</h2>
        <p class="text-muted">เลือกเมนูที่ต้องการจัดการ</p>
    </div>

    <div class="row g-4 justify-content-center">
        <div class="col-md-4">
            <a href="products.php" class="card h-100 shadow-sm border-0 menu-card text-center py-4">
                <div class="card-body">
                    <i class="bi bi-box-seam display-4 text-primary mb-3"></i>
                    <h4 class="card-title">จัดการสินค้า</h4>
                    <p class="card-text text-muted">เพิ่ม ลบ แก้ไข รายการสินค้า</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="orders.php" class="card h-100 shadow-sm border-0 menu-card text-center py-4">
                <div class="card-body">
                    <i class="bi bi-cart-check display-4 text-success mb-3"></i>
                    <h4 class="card-title">จัดการออเดอร์</h4>
                    <p class="card-text text-muted">ตรวจสอบคำสั่งซื้อใหม่</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="customers.php" class="card h-100 shadow-sm border-0 menu-card text-center py-4">
                <div class="card-body">
                    <i class="bi bi-people display-4 text-warning mb-3"></i>
                    <h4 class="card-title">จัดการลูกค้า</h4>
                    <p class="card-text text-muted">ดูรายชื่อสมาชิกและข้อมูล</p>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>