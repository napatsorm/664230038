<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    
 <div class="container mt-5">
        <h1 class="text-center">PHP Calculate Money</h1>
        <hr>
        <p class="text-center">กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>

        <form method="post" class="text-center">

            <div class="row justify-content-center mb-3">
                <div class="col-md-2">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" required
                        value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>">
                </div>
                <div class="col-md-2">
                    <label>Amount</label>
                    <input type="number" name="amount" class="form-control" required
                        value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>">
                </div>
            </div>
<!-- for membership-->
        <div>
            <div >
                 <label class="form-label d-block" form="">membership ?></label>
                 <div class="form-check form-check-inline">
                    <input type="radio" name="member" id="member" value="1"
                    <?php
                    echo isset($_POST['member'])&&$_POST['member']== '1' ? 'checked' : ''
                    ?>>
                    <label for="member">Member(10% Discount)</label>
                 </div>
                 <div class="form-check form-check-inline">
                    <input type="radio" name="member" id="member" value="0"
                     <?php
                    echo isset($_POST['member'])&&$_POST['member']== '0' ? 'checked' : ''
                    ?>>
                    <label for="member">Not a member</label>
                 </div>
            </div>
        </div>


            <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
            <button type="reset" class="btn btn-secondary"onlick ='clearAllData()'>Reset All</button> 
        </form>
    <div class="card mt-4">
            <div class="card-header bg-primary text-white d-flex justify-content-center">
                Result
            </div>
            <div class="card-body">
                <?php
            
                    if(isset($_POST['price'])&&isset($_POST['amount'])){
                            $price = $_POST['price'];
                            $amount = $_POST['amount'];

                            //ตรวจสอบว่าราคาและจำนวนเป็ตัวเลขหรือไม่
                            if(is_numeric($price)&& is_numeric($amount)){
                                $price=floatval($price);
                                $amount=floatval($amount);
                                $total = $price*$amount; // คำนวณยอดรวม
                                $discount = $total * 0.1; //คำนวณส่วนลด 10%
                                
                                //ตรวจสอบว่ามีการตรวจสมาชิกหรือไม่
                                
                             if(isset ($_POST['member'])&& $_POST['member']== '1'){
                                 $total_paid = $total-$discount;
                                 //ถ้าเป็นสมาชิกจะหักส่วนลด
                                 echo "<ul class='list-group list-group-flush'>";
                                 echo "<li class='list-group-item'>ราคาสินค้า: <strong>" . number_format($price,2) . "</strong></li>";
                                 echo "<li class='list-group-item'>จำนวนสินค้า: <strong>" . number_format($amount,2) . "</strong></li>";

                                 echo "<li class='list-group-item'>ยอดซื้อรวม: <strong>" . number_format($total,2) . "</strong></li>";
                                 echo "<li class='list-group-item'>ส่วนลดที่ได้: <strong>" . number_format($discount,2) . "</strong></li>";

                                 echo "<li class='list-group-item text-primary'>ยอดที่ต้องจ่ายจริงหลังหักส่วนลด: <strong>" . number_format($total_paid,2) . "</strong></li>";
                                 echo "</ul>";
                                    
                            }
                            else{
                                 $total_paid = $total;
                                echo "<ul class='list-group list-group-flush'>";
                                 echo "<li class='list-group-item'>ราคาสินค้า: <strong>" . number_format($price,2) . "</strong></li>";
                                 echo "<li class='list-group-item'>จำนวนสินค้า: <strong>" . number_format($amount,2) . "</strong></li>";

                                 echo "<li class='list-group-item'>ยอดซื้อรวม: <strong>" . number_format($total,2) . "</strong></li>";
                                

                                 echo "<li class='list-group-item text-primary'>ยอดที่ต้องจ่ายจริงหลังหักส่วนลด: <strong>" . number_format($total_paid,2) . "</strong></li>";
                                 echo "</ul>";
                            }




                            }else{
                                echo "<div class='alert alert-danger text-center'>Please input valid numeric valur for Price and Amount.</div>";
                            }
                            


                          

                    }else{
                            echo "<div class='alert alert-secondary text-center'>Please input Price and Amount.</div>";
                    }
                ?>




            </div> 
    </div>
    

  <script> 
        //ฟังก์ชันลบข้อมูลทั้งหมดในฟอร์มและผลลัพธ์
        function clearAllData() { 
            document.getElementById("result").innerHTML = ""; // ลบผลลัพธ์
            document.getElementById("price").value = ""; // ลบค่าราคา
            document.getElementById("member1").checked = false; // ยกเลิกเลือกสมาชิก
            document.getElementById("member2").checked = true; // เลือกไม่เป็นสมาชิก
            document.getElementById("amount").value = ""; // ลบค่าจำนวน
        } 
    </script>
   
     
</body>
</html>
