<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aphimuk - ฟอร์มรับข้อมูล (Bootstrap)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body {
        background-color: #e9ecef; /* สีพื้นหลังอ่อนๆ */
        font-family: 'Sukhumvit Set', 'Kanit', sans-serif; /* ปรับ Font ถ้ามี */
    }
    .card-header, .card-footer {
        background-color: #ffda79; /* สี Header/Footer สดใส */
        color: #343a40;
        font-weight: bold;
    }
    .btn-custom-youtube {
        background-color: #ff0000; /* สีแดง YouTube */
        color: white;
        border: none;
    }
    .btn-custom-youtube:hover {
        background-color: #cc0000;
    }
</style>
</head>

<body>
<div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-header text-center">
            <h1 class="mb-0">✨ ฟอร์มรับข้อมูล-อภิมุข แสงดอกไม้(แฟร้งค์) Gemini</h1>
        </div>
        <div class="card-body">
            <form method="post" action="" class="row g-3">
                
                <div class="col-md-6">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                
                <div class="col-md-6">
                    <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="height" name="height" max="200" min="100" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>
                
                <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                </div>
                
                <div class="col-md-6">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="เลือกสี">
                </div>
                <div class="col-md-6">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ" selected>คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="col-12 mt-4 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg">✅ สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-danger btn-lg">❌ ยกเลิก</button>
                    <button type="button" onClick="window.location='https://www.youtube.com/watch?v=Ay7Fg3OwGeQ&list=RDvXhnmZxm3Co&index=16'" class="btn btn-custom-youtube btn-lg">▶️ เพลงคิดฮอด</button>
                    <button type="button" onDblClick="alert('จ๊ะเอ๋!');" class="btn btn-info btn-lg">👋 Hello (Double Click)</button>
                    <button type="button" onClick="window.print();" class="btn btn-success btn-lg">🖨️ พิมพ์</button>
                </div>

            </form>
        </div>
        <div class="card-footer text-center">
            <small>กรุณากรอกข้อมูลที่เป็นจริง</small>
        </div>
    </div>
    
    <div class="mt-4">
        <?php
        if (isset($_POST['Submit'])){
            echo "<div class='alert alert-warning shadow-sm' role='alert'>";
            echo "<h4 class='alert-heading'>🎉 ข้อมูลที่คุณกรอก:</h4>";
            echo "<hr>";
            
            $fullname = htmlspecialchars($_POST['fullname']);
            $phone = htmlspecialchars($_POST['phone']);
            $height = htmlspecialchars($_POST['height']);
            $address = htmlspecialchars($_POST['address']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $color = htmlspecialchars($_POST['color']);
            $major = htmlspecialchars($_POST['major']);

            include_once("connectdb.php");
            
            $sql = "INSERT INTO register (r_id, r_name, r_phone,r_height,r_address,r_birthday,r_color,r_major) VALUES (NULL, '{$fullname}','{$phone}','{$height}','{$address}','{$birthday}','{$color}','{$major}');";
            mysqli_query($conn, $sql) or  die ("insert ไม่ได้");

            echo"<script>";
            echo"alert('บันทึกสำเร็จ');";
            echo"</script>";

            echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
            echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height ซม.</p>";
            echo "<p><strong>ที่อยู่:</strong> $address</p>";
            echo "<p><strong>วัน/เดือน/ปีเกิด:</strong> $birthday</p>";
            echo "<p class='d-flex align-items-center'><strong>สีที่ชอบ:</strong> 
                  <span class='badge' style='background-color:{$color}; color:".(hexdec(str_replace('#', '', $color)) > 0xffffff/2 ? '#000000' : '#ffffff')."; margin-left: 10px;'>
                      $color
                  </span>
                  </p>";
            echo "<p><strong>สาขาวิชา:</strong> $major</p>";
            echo "</div>";
        }
        ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>