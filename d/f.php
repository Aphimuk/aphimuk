<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aphimuk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        background-color: #f4f7f6;
        font-family: 'Tahoma', sans-serif;
    }
    .card-header {
        background-color: #28a745; /* สีเขียว (Success) */
        color: white;
    }
    pre {
        background-color: #e9ecef !important;
        padding: 10px;
        border-radius: 5px;
        white-space: pre-wrap;
        border: 1px solid #ced4da;
    }
</style>
</head>

<body>
<div class="container py-5">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h2 class="mb-0">✅ ใบสมัครงานถูกส่งเรียบร้อยแล้ว</h2>
            <p class="mb-0">ข้อมูลที่คุณได้กรอกมีดังนี้:</p>
        </div>
        <div class="card-body">
            
            <?php
            // ตรวจสอบว่ามีการส่งข้อมูลผ่านเมธอด POST มาหรือไม่ (จากหน้า e.php)
            if (isset($_POST['Submit'])){
                
                // 1. ดึงข้อมูลจาก $_POST และใช้ htmlspecialchars เพื่อทำความสะอาดข้อมูล
                $position = htmlspecialchars($_POST['position']);
                $prefix = htmlspecialchars($_POST['prefix']);
                $fullname = htmlspecialchars($_POST['fullname']);
                $dob = htmlspecialchars($_POST['dob']);
                $education = htmlspecialchars($_POST['education']);
                $special_skill = htmlspecialchars($_POST['special_skill']);
                $work_experience = htmlspecialchars($_POST['work_experience']);
                
                // 2. แสดงผลข้อมูลในรูปแบบตารางที่สวยงาม
                echo "<table class='table table-bordered table-striped'>";
                
                // ส่วนที่ 1: ตำแหน่งงาน
                echo "<tr class='table-success'><th colspan='2'>ข้อมูลตำแหน่งงาน</th></tr>";
                echo "<tr><td style='width: 30%;'>ตำแหน่งที่ต้องการสมัคร</td><td><strong class='text-primary'>$position</strong></td></tr>";
                
                // ส่วนที่ 2: ข้อมูลส่วนตัว
                echo "<tr class='table-success'><th colspan='2'>ข้อมูลส่วนตัว</th></tr>";
                echo "<tr><td>คำนำหน้าชื่อ</td><td>$prefix</td></tr>";
                echo "<tr><td>ชื่อ-สกุล</td><td>$fullname</td></tr>";
                echo "<tr><td>วันเดือนปีเกิด</td><td>$dob</td></tr>";
                
                // ส่วนที่ 3: การศึกษาและความสามารถ
                echo "<tr class='table-success'><th colspan='2'>การศึกษาและความสามารถ</th></tr>";
                echo "<tr><td>ระดับการศึกษาสูงสุด</td><td>$education</td></tr>";
                echo "<tr><td>ความสามารถพิเศษ</td><td>$special_skill</td></tr>";
                
                // ส่วนที่ 4: ประสบการณ์ทํางาน
                echo "<tr class='table-success'><th colspan='2'>ประสบการณ์ทำงาน</th></tr>";
                echo "<tr><td colspan='2'><pre>$work_experience</pre></td></tr>";
                
                echo "</table>";

            } else {
                // กรณีเข้าถึงหน้านี้โดยตรงโดยไม่ได้ส่งข้อมูลผ่านฟอร์ม
                echo "<div class='alert alert-danger' role='alert'><strong>การเข้าถึงไม่ถูกต้อง!</strong> กรุณากรอกข้อมูลผ่านหน้า <a href='e.php'>ฟอร์มรับสมัครงาน</a></div>";
            }
            ?>
        </div>
        <div class="card-footer text-center">
            <a href="e.php" class="btn btn-secondary">กลับไปที่ฟอร์ม</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>