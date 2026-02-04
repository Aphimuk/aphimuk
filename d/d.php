<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aphimuk - Night Sky Theme</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* 🎆 พื้นหลังท้องฟ้ายามค่ำคืน */
body {
    background: linear-gradient(180deg, #0d1b2a, #1b263b, #415a77);
    min-height: 100vh;
    font-family: 'Kanit', sans-serif;
    color: #f8f9fa;
    overflow-x: hidden;
}

/* 🌟 ดาวระยิบระยับ */
.stars {
    width: 2px;
    height: 2px;
    background: white;
    position: absolute;
    border-radius: 50%;
    animation: twinkle 2s infinite ease-in-out alternate;
}
@keyframes twinkle {
    from { opacity: 0.2; }
    to { opacity: 1; }
}

/* ⭐ การ์ดฟอร์ม */
.card {
    background: rgba(255,255,255,0.07);
    backdrop-filter: blur(12px);
    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.25);
}

/* เฮดเดอร์ */
.card-header {
    background: rgba(255,255,255,0.15);
    font-weight: bold;
    color: #ffe066;
}

/* ฟุตเตอร์ */
.card-footer {
    background: rgba(255,255,255,0.12);
    color: #eee;
}

/* ฟอร์มและข้อความในฟอร์มทั้งหมดให้เป็นสีขาว */
.form-label, .form-control, .form-select, .input-group-text {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1) !important;
    border-color: rgba(255, 255, 255, 0.3) !important;
}

/* ปุ่ม */
.btn-night {
    background: #4cc9f0;
    color: #000;
    border: none;
}
.btn-night:hover {
    background: #3bb8e0;
}

.btn-youtube {
    background: #e63946;
    color: white;
}
.btn-youtube:hover {
    background: #c92d3c;
}

.btn-reset {
    background: #d00000;
    color: white;
}
.btn-reset:hover {
    background: #b00000;
}

.btn-print {
    background: #80ffdb;
    color: #003049;
}
.btn-print:hover {
    background: #64f3ca;
}

.btn-hello {
    background: #7209b7;
    color: #fff;
}
.btn-hello:hover {
    background: #560bad;
}

/* ข้อความแจ้งผล */
.alert-result {
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
}
</style>
</head>

<body>

<!-- ⭐ สร้างดาว 50 ดวง -->
<script>
for(let i=0;i<50;i++){
    let star=document.createElement("div");
    star.className="stars";
    star.style.top=Math.random()*100+"vh";
    star.style.left=Math.random()*100+"vw";
    star.style.animationDuration=(Math.random()*3+2)+"s";
    document.body.appendChild(star);
}
</script>

<div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-header text-center">
            <h2 class="mb-0">🌙 ฟอร์มรับข้อมูล - อภิมุข แสงดอกไม้ (แฟร้งค์)GPT </h2>
        </div>

        <div class="card-body">
            <form method="post" action="" class="row g-3">
                
                <div class="col-md-6">
                    <label class="form-label">ชื่อ-สกุล *</label>
                    <input type="text" class="form-control" name="fullname" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">เบอร์โทร *</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">ส่วนสูง (ซม.) *</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="height" min="100" max="200" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label">วัน/เดือน/ปีเกิด</label>
                    <input type="date" class="form-control" name="birthday">
                </div>

                <div class="col-12">
                    <label class="form-label">ที่อยู่</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" name="color" value="#4cc9f0">
                </div>

                <div class="col-md-6">
                    <label class="form-label">สาขาวิชา</label>
                    <select class="form-select" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ" selected>คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="col-12 mt-4 d-flex flex-wrap justify-content-center gap-2">
                    <button type="submit" name="Submit" class="btn btn-night btn-lg">✔ สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-reset btn-lg">✖ ยกเลิก</button>
                    <button type="button" onClick="window.location='https://www.youtube.com/watch?v=Ay7Fg3OwGeQ&list=RDvXhnmZxm3Co&index=16'" class="btn btn-youtube btn-lg">▶ เพลงคิดฮอด</button>
                    <button type="button" onDblClick="alert('จ๊ะเอ๋!! 🌟');" class="btn btn-hello btn-lg">👋 Hello</button>
                    <button type="button" onClick="window.print();" class="btn btn-print btn-lg">🖨 พิมพ์</button>
                </div>

            </form>
        </div>

        <div class="card-footer text-center">
            <small>✨ กรุณากรอกข้อมูลให้ครบถ้วน และเป็นความจริง ✨</small>
        </div>

    </div>

    <div class="mt-4">
        <?php
        if (isset($_POST['Submit'])){
            echo "<div class='alert alert-result p-4 rounded'>";

            $fullname = htmlspecialchars($_POST['fullname']);
            $phone = htmlspecialchars($_POST['phone']);
            $height = htmlspecialchars($_POST['height']);
            $address = htmlspecialchars($_POST['address']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $color = htmlspecialchars($_POST['color']);
            $major = htmlspecialchars($_POST['major']);

            echo "<h4 class='mb-3'>🌌 ข้อมูลที่คุณกรอก:</h4>";
            echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
            echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height ซม.</p>";
            echo "<p><strong>ที่อยู่:</strong> $address</p>";
            echo "<p><strong>วัน/เดือน/ปีเกิด:</strong> $birthday</p>";
            echo "<p><strong>สีที่ชอบ:</strong> <span style='background:$color;padding:5px 10px;border-radius:5px;margin-left:8px;'>$color</span></p>";
            echo "<p><strong>สาขาวิชา:</strong> $major</p>";

            echo "</div>";
        }
        ?>
    </div>

</div>

</body>
</html>
