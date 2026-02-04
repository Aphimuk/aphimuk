<?php
	session_start();
?>

<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - อภิมุข แสงดอกไม้(แฟร้งค์)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
            <div class="card login-card">
                <div class="card-header">
                    <h3 class="mb-0">ระบบหลังบ้าน</h3>
                    <small>อภิมุข แสงดอกไม้ (แฟร้งค์)</small>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="auser" class="form-label">Username</label>
                            <input type="text" name="auser" class="form-control" id="auser" placeholder="กรอกชื่อผู้ใช้" autofocus required>
                        </div>
                        <div class="mb-4">
                            <label for="apwd" class="form-label">Password</label>
                            <input type="password" name="apwd" class="form-control" id="apwd" placeholder="กรอกรหัสผ่าน" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="Summit" class="btn btn-primary btn-lg">เข้าสู่ระบบ (LOGIN)</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['Summit'])){
	include_once("connectdb.php");
    
    $username = mysqli_real_escape_string($conn, $_POST['auser']);
    $password = mysqli_real_escape_string($conn, $_POST['apwd']);

	$sql = "SELECT * FROM admin WHERE a_username='{$username}' AND a_password='{$password}' LIMIT 1 ";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	
	if($num == 1){
        $data = mysqli_fetch_array($rs); 
        
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name']; 
        
        echo "<script>";
        echo "window.location='index2.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Username หรือ Password ไม่ถูกต้อง');";
        echo "</script>";
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>