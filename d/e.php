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
        background-color: #17a2b8;
        color: white;
    }
    .form-section-title {
        color: #17a2b8;
        border-bottom: 2px solid #17a2b8;
        padding-bottom: 5px;
        margin-top: 20px;
        margin-bottom: 15px;
        font-weight: bold;
    }
</style>
</head>

<body>
<div class="container py-5">
    <div class="card shadow-lg border-0">
        <div class="card-header text-center">
            <h1 class="mb-1">InnoFuture Solutions</h1>
            <p class="mb-0 fs-5">🌟 ใบสมัครงานออนไลน์</p>
        </div>
        <div class="card-body p-4 p-md-5">
            <form method="post" action="f.php" class="row g-4">
                
                <div class="col-12">
                    <h3 class="form-section-title">ตำแหน่งงานที่ต้องการสมัคร</h3>
                </div>
                <div class="col-md-12">
                    <label for="position" class="form-label fw-bold">เลือกตำแหน่งงาน <span class="text-danger">*</span></label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="" disabled selected>--- กรุณาเลือกตำแหน่ง ---</option>
                        <option value="IT Consultant">IT Consultant (ที่ปรึกษาด้านไอที)</option>
                        <option value="UX/UI Designer">UX/UI Designer (นักออกแบบประสบการณ์ผู้ใช้)</option>
                        <option value="Account Manager">Account Manager (ผู้จัดการบัญชีลูกค้า)</option>
                        <option value="Junior Programmer">Junior Programmer (โปรแกรมเมอร์รุ่นเยาว์)</option>
                    </select>
                </div>
                
                <div class="col-12">
                    <h3 class="form-section-title">ข้อมูลส่วนตัว</h3>
                </div>
                <div class="col-md-3 col-sm-6">
                    <label for="prefix" class="form-label fw-bold">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                    <select class="form-select" id="prefix" name="prefix" required>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว" selected>นางสาว</option>
                    </select>
                </div>
                <div class="col-md-5 col-sm-6">
                    <label for="fullname" class="form-label fw-bold">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="col-md-4">
                    <label for="dob" class="form-label fw-bold">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                
                <div class="col-12">
                    <h3 class="form-section-title">การศึกษาและความสามารถ</h3>
                </div>
                <div class="col-md-6">
                    <label for="education" class="form-label fw-bold">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>--- เลือกระดับการศึกษา ---</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปวส./อนุปริญญา">ปวส./อนุปริญญา</option>
                        <option value="มัธยมปลาย">มัธยมศึกษาตอนปลาย</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="special_skill" class="form-label fw-bold">ความสามารถพิเศษ</label>
                    <textarea class="form-control" id="special_skill" name="special_skill" rows="3" placeholder="ระบุทักษะทางภาษา, โปรแกรมเฉพาะทาง, หรือใบรับรอง"></textarea>
                </div>
                
                <div class="col-12">
                    <h3 class="form-section-title">ประสบการณ์ทำงาน</h3>
                </div>
                <div class="col-12">
                    <label for="work_experience" class="form-label fw-bold">รายละเอียดประสบการณ์ทำงาน</label>
                    <textarea class="form-control" id="work_experience" name="work_experience" rows="5" placeholder="ระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลา และหน้าที่ความรับผิดชอบ..."></textarea>
                </div>

                <div class="col-12 mt-4 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="submit" name="Submit" class="btn btn-info btn-lg px-5 text-white">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-secondary btn-lg px-5">ล้างข้อมูล</button>
                </div>

            </form>
        </div>
        <div class="card-footer text-center text-muted">
            <small>InnoFuture Solutions | Your Future, Our Innovation.</small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>