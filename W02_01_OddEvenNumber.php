<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="contaiiner mt-5">
    <h1  class="text-center">OddEvenNumber</h1>
    <hr>
    <p class="text-center"> กรุณากรอกตัวเลขเพื่อทำการตรวจสอบเลขคู่เลขคี่</p>

    <form class=" text-center" action="" method="post">
    <div class="form-group">
        <input type="number" name ="number" id="number" class="form-control w-50 mx-auto" placeholder="Enter a number">
    </div>
    <button type="submit" class="btn btn-primary mt-3 mb-3">Check</button>
    </form>
<!-- เเสดงผลลัพธ์-->

<!-- คำนวณหาเลขคู่ คี่-->
     <?php
      $get_number = $_POST['number']?? null;
            if($get_number % 2 == 0){
                echo "<h3 class='text-success text-center'>This number $get_number is an even number</h3>";
                
            }else{
                 echo "<h3 class='text-success text-center'>This number $get_number is an odd number</h3>";
            }

?>

    </div>
    <hr>
    <a href="index.php">Home</a>
     
    
</body>
</html>