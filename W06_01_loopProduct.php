<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for show product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
      <!-- DataTable CSS -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">

  <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


    <style>
        .container{
            max-width: 800px;
        }
    </style>
</head>
<body>
    <?php
        $products = [
        ['id'=>1001, 'name'=>'Apple', 'price'=>60 ,'quantity'=>50],
        ['id'=>1002, 'name'=>'Banana', 'price'=>20,'quantity'=>20],
        ['id'=>1003, 'name'=>'Orange', 'price'=>25,'quantity'=>60],
        ['id'=>1004, 'name'=>'Coconut', 'price'=>35,'quantity'=>70],
        ['id'=>1005, 'name'=>'Grapes', 'price'=>45,'quantity'=>35],
        ['id'=>1006, 'name'=>'Mango', 'price'=>50,'quantity'=>50],
        ['id'=>1007, 'name'=>'Pineapple', 'price'=>55,'quantity'=>75],
        ['id'=>1008, 'name'=>'Papaya', 'price'=>55,'quantity'=>50],
        ['id'=>1009, 'name'=>'Strawberry', 'price'=>80,'quantity'=>70],
        ['id'=>1010, 'name'=>'Watermelon', 'price'=>70,'quantity'=>55],
        ['id'=>1011, 'name'=>'Kiwi', 'price'=>65,'quantity'=>45],
        ['id'=>1012, 'name'=>'Dragonfruit', 'price'=>70,'quantity'=>80],
        ['id'=>1013, 'name'=>'Peach', 'price'=>60,'quantity'=>90],
        ['id'=>1014, 'name'=>'Blueberry', 'price'=>90,'quantity'=>80],
        ['id'=>1015, 'name'=>'Cherry', 'price'=>85,'quantity'=>100],
       ];
       //  foreach ($products as $product) {
       //     echo $product['id']."สินค้า:". $product["name"].",ราคา:".
       //     $product["price"]." บาท ".$product["quantity"]." ชิ้น,<br>";

       // }
   
?>
<div class="container mt-5 ">
    <h1>Product List</h1>

    <form action="" method="post" class="mb-3">
        <div>
            <input type="number" name="price" placeholder="Enter Price" class="form-control mb-2 ">
            <button type="submit" class="btn btn-primary">Filter</button>

        </div>
        

    </form>




<table id="productTable" class="table table-striped table-bordered">
<thead>
    <tr>
        <th>#</th>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
</thead>
<tbody>
<?php
   //check if form is submitted
    if(isset($_POST['price'])&& !empty($_POST['price'])) {
        $filterprice = $_POST['price'];
        $filteredProducts = array_filter($products, function($product) use ($filterprice) {
            return $product['price'] == $filterprice;
        });

        //คืนค่า array ใหม่ โดยรีเซ็ต index ให้เริ่มที่0
        $filteredProducts = array_values($filteredProducts);

    } else {
        $filteredProducts = $products;
    }


 foreach ( $filteredProducts as $index => $product) {
          
        echo "<tr>";
        echo "<td>".($index + 1)."</td>";
        echo "<td>".$product['id']."</td>";
        echo "<td>".$product['name']."</td>";
        echo "<td>".$product['price']."</td>";
        echo "<td>".$product['quantity']."</td>";
        echo "</tr>";
      
        }

?>

  
</tbody>
</table>
</div>

 <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable ('#productTable');
    </script>

</body>
</html>