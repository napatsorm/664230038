<?php 

require_once 'W07_01_connectDB.php';

$sql = "SELECT * FROM products";

$result = $conn->query($sql);//ใช้คำสั่ง query เพื่อรันคำสั่ง

//ตรวจสอบว่ามีข้อมูลหรือไม่
if ($result->rowCount() > 0) { 
    // echo "<h2>พบข้อมูลในตาราง product</h2><br>";

  //$data =  $result->fetchAll(PDO::FETCH_NUM);
  //$data =  $result->fetchAll(PDO::FETCH_ASSOC);
  //$data =  $result->fetchAll(PDO::FETCH_BOTH);

  //echo "$data[0][0] <br>";

  //print_r($data); //แสดงข้อมูลทั้งหมดในรูปแบบ array


  //ใช้ prepaed statement เพื่อป้องกัน SQL Injection
  // ใช้ execute() เพื่อรันคำสั่ง sql
  // ใช้ fetchAll() เพื่อดึงข้อมูลทั้งหมดในครั้งเดียว
  // ใช้ print_r() เพื่อแสดงข้อมูลทั้งหมดในรูปแบบ array
  $stmt = $conn -> prepare($sql);
  $stmt -> execute();
  $data =  $stmt->fetchAll(PDO::FETCH_NUM);


  // echo "<br>";
  // echo "<pre>";
  //    print_r($data);
  // echo "</pre>";

  // echo "======================================================================";

$stmt = $conn -> prepare($sql);
  $stmt -> execute();
  $data =  $stmt->fetchAll(PDO::FETCH_ASSOC);


  // echo "<br>";
  // echo "<pre>";
  //    print_r($data);
  // echo "</pre>";

  // แสดงผลข้อมูลที่ดึงมา
        header('Content-Type: application/json'); // ระบุ Content-Type เป็น JSON
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); // แปลงข้อมูลใน $arr เป็น JSON และแสดงผล




} else {
    echo "<h2>ไม่พบข้อมูลในตาราง product</h2>";
}



?>