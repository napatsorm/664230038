<?php
// connect database ด้วย mysqli

// $host="localhost";
// $username="root";
// $password="";
// $dbname="db68s_product";

// $conn = new mysqli($host, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);

// } else {
//     echo "Connected successfully";

// }
$host="localhost";
$username="root";
$password="";
$dbname="db68s_product";
$dns = "mysql:host=$host;dbname=$dbname";

try{
   // $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn = new PDO($dns, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "PDO: Connected successfully";


} catch(PDOException){ 
    echo "Connection failed: " . $e->getMessage();

  

}





?>