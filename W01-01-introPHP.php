<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Welcome to PHP Basic</h1>
    <p>This is a simple PHP application.</p>
    <hr>
    <h1 style="color: darkred;">Basic PHP Syntax </h1>
    <pre>
        &lt;?php
       
         echo"Hello world !";<br>
       
        ?&gt;
        </pre>
        <h3>Result</h3>

<div style="color:blue;">
         <?php
       
        echo"Hello world <br>";
        print"<span style='color:green;'>Napatsorn Sirariam  </span>"; //เปลี่ยนสี

 ?>
 </div>
 <hr>

  <h1 style="color: darkred;">PHP Variablcs </h1>
    <pre>
        &lt;?php
       
         $greeting="Hello, world !";
       echo $greeting
        ?&gt;
        </pre>
        <h3>Result</h3>
  <?php
       
         $greeting="Hello, world !";
       echo"<span style='color:blue;'>". $greeting." </span>";
        ?>
<hr>

 <h1 style="color: darkred;">Integer Variable Example </h1>
 <?php 
$age=20;
echo"<span style='color:blue;'>I am". $age. " year old</span><br>";
echo"<span style='color:blue;'>I am $age year old</span>";
?>


<h1 style="color: darkred;">Calculatoe with Variables </h1>
 <?php 
$y=5;
$x=4;
$int=$y+$x;
echo"<span style='color:blue;'>the sum of $y and $x is $int</span>";

?>

<h1 style="color: darkred;">คำนวณพื้นที่สามเหลี่ยม </h1>
 <?php 
$base= 10;
$hige= 5;
$result=1/2* $base* $hige;

echo"<span style='color:blue;'>พื้นที่สามเหลี่ยมเหลือ $result ตารางหน่วย</span>";


?>
<!--=============================================== -->
<h1 style="color: darkred;">คำนวณอายุจากปีเกิด </h1>
 <?php 
$year=2568;
$birth = 2548;
$age=$year-$birth;
echo"<span style='color:blue;'>อายุของคุณ $age ปี</span>";

?>
<!--=============================================== -->
<hr>
  <h1 style="color: blue;">IF-Else </h1>
            <!-- เกณฑ์ผ่านสอบ ต้องได้คะเเนน มากกว่า60คะเเนน-->
 <?php    

 $score= 75; //เปลี่ยนค่า score เพื่อทดสอบค่า
 
 echo"คะเเนนของคุณคือ $score <br>";
         if($score > 60){
            echo"ผลลัพธ์ : สอบผ่าน";
        }else{
           echo"ผลลัพธ์ : สอบไม่ผ่าน";
         }
 ?>
<!--=============================================== -->
<hr>
  <h1 style="color: blue;">Boolean Variable </h1>
            <!-- ตรวจสอบว่าเป็ฯนักศึกษาหรือไม่ -->
             <?php 
             echo"<h3>คุณเป็นนักเรียนใช่หรือไม่<h3>";
             $is_student =true; // เปลี่ยนค่าเป็น false เพื่อทดสอบ
            if(!$is_student) {
              echo"ใช่";
            }else {
              echo"ไม่ใช่";
            }
             ?>
<!--=============================================== -->
<hr>
  <h1 style="color: blue;">Loop</h1>
  <h2>Loop ===========for=========</h2>
            <h3>เเสดงตัวเลข 1 ถึง 10 พร้อมหาผลบวกของตัวเลข</h3>
  <?php 
   $sum= 0;
  for($i=5;$i<=9;$i++){
    $sum=$sum+$i; // $sum+= $sum+ $1;
    if($i <9){
    echo"$i + ";
    }else{
    echo"$i = $sum ";
    }
  }

   echo"<br>ผลบวกตัวเลข 5 ถึง 9 คือ$sum";
  ?>
  <!--=====================for While========================== -->
  <hr>
  <h2>Loop ===========สูตรคูณเเม่2=========</h2>
         <?php
        $j = 1; // ค่าเริ่มต้น
        
         while($j <= 12){ //เงื่อนไข
        echo"2 x $j = " . (2 * $j) . "<br>";

        $j++;//เพิ่ม ลด ค่า
         }
         
         ?>
         <hr>

 <h2>Loop ===========สูตรคูณเเม่2 ใส่ตาราง=========</h2>
 <table class="table table-bordered table-striped w-auto mx-auto text-center"> 
    <thead class="table-success">
      <tr>
         <th>ลำดับ</th>
         <th>สูตรคูณ</th>
         <th>ผลลัพธ์</th>
      </tr>
    </thead>
    <boby>
      <?php 
       for($i=1 ;$i <= 12;$i++){
          echo"<tr>";
          echo"<td>$i</td>";
          echo"<td>2 x $i</td>";
          echo"<td> ". (2 * $i) ." </td>";
          echo"</tr>";
       }

      ?>
    </boby>
 </table>
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>
    <?php 
    //สร้างอาร์เรย์ของผลไม้
    $fruits = ["Apple","Banana","Coconut"];
    ?>

           <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:red; background-color: lightgray; padding: 10px; ">
     <?php
     echo  "รายการผลไม้ที่ <br>";
  echo "ผลไม้ที่1:".$fruits[0] . "<br>";
  echo "ผลไม้ที่2:".$fruits[1] . "<br>";
  echo "ผลไม้ที่3:".$fruits[2] . "<br>";
  
  ?>    
          <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>
     
    </div>

    <br>
<h4>แสดงจำนวนสมาชิกในอาร์เรย์</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "จำนวนผลไม้: ".count($fruits)." ขนิด <br>";
            
            echo "<br>";

        ?>
    </div>

        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(" - ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
       <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
       foreach ($fruits as $fruit){
        echo "ผลไม้: $fruit <br>";
       }
         ?>
         </div>
<div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
       foreach ($fruits as $fruit){
        if($fruit=== end($fruits)){
          echo "$fruit . ";
        }
        else{
          echo $fruit , ".";
        }
        
       }
            echo "<br>";
        ?>
    </div>
    
   <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
     
            echo "<br>";
        ?>
    </div>
    
    
    
        <!-- ======================================================== -->
    <!-- ======================================================== -->
        
        <hr>
        <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
        <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
        <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
        <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


        <?php
            // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
            $products = [
                ["name" => "Apple", "price" => 30],
                ["name" => "Banana", "price" => 20],
                ["name" => "Cherry", "price" => 15]
            ];
        ?>


    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
            echo $products[0]["name"] . "<br>";  // Apple
            echo $products[2]["price"] . "<br>"; // 15

    
        ?>
    </div>
    
 <br>
   <!-- ======================================================== -->
    <br>
<h4>แสดงรายการสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
        // ตัวอย่าง array สำหรับใช้ทดสอบ (หากคุณยังไม่ได้ประกาศไว้)
        $products = [
            ["name" => "มะม่วง", "price" => 20],
            ["name" => "กล้วย", "price" => 15],
            ["name" => "ส้ม", "price" => 30]
        ];

        $total_price = 0; 

        foreach ($products as $product) {
            echo "สินค้า : $product[name] ราคา $product[price] บาท,<br>";
            $total_price += $product["price"]; 
        }

        echo "<br>ราคาผลรวมทั้งหมด: $total_price บาท"; 
    ?>
</div>












       <hr>
    <a href="index.php">Home</a>





</body>
</html>