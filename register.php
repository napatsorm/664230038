<?php 
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจากฟอร์ม
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    // นำข้อมูลไปบันทึกลงฐานข้อมูล
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
      $sql = "INSERT INTO users (username, full_name, email, password, role) VALUES (?, ?, ?, ?, 'admin')";
      $stmt = $conn -> prepare($sql);
      $stmt -> execute([$username, $fullname, $email, $hashedPassword]);

    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
     <link rel = "stylesheet" href = https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css></link>
     <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4" style="max-width: 500px; margin: auto;">
    <h2 class="text-center">สมัครสมาชิก</h2>
    <form action="" method="post">
        
        <div>
            <label for="username" class="form-label">ชื่อผู้ใช้</label>
            <input type="text" name="username" id="username" class="form-control"  placeholder="ชื่อผู้ใช้" required>
        </div>
        <div>
            <label for="fullname" class="form-label">ชื่อ-สกุล</label>
            <input type="text" name="fullname" id="fullname" class="form-control"  placeholder="ชื่อ-สกุล" required>
        </div>
        <div>
            <label for="email" class="form-label">อีเมล</label>
            <input type="email" name="email" id="email" class="form-control"  placeholder="อีเมล" required>
        </div>
        <div>
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" name="password" id="password" class="form-control"  placeholder="*****" required>
        </div>
        <div>
            <label for="confirm_password" class="form-label">ยืนยันรหัสผ่าน</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control"  placeholder="ยืนยันรหัสผ่าน" required>
        </div>

        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
            <a href="login.php" class="btn btn-link "> เข้าสู่ระบบ</a>
        </div>

    </form>
  





</div>


</div>
</div>





<!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
</body>
</html>