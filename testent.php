<?php
session_start();
require "connection.php";
if (isset($_SESSION["se"])) {

    $seller_email = $_SESSION["se"]["email"];

    $productLoad = Database::search ("SELECT * FROM `product` WHERE `seller_email`='".$seller_email."'");
    $product_Num = $productLoad -> num_rows;

    for($x = 0 ; $x < $product_Num; $x++){
        $product_data =$productLoad -> fetch_assoc();

        ?>
        <?php
       if($product_data["qty"]<5 && $product_data["qty"] >0){
       ?>
       <tr class="table-warning">
        <th scope="row"><?php echo $product_data["id"]; ?></th>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["price"]; ?></td>
        <td><?php echo $product_data["qty"]; ?></td>
        <td>Low Stock</td>
        </tr>
       <?php
       }else if($product_data["pro_status_id"]== 1){
       ?>
       <tr class="table-success">
        <th scope="row"><?php echo $product_data["id"]; ?></th>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["price"]; ?></td>
        <td><?php echo $product_data["qty"]; ?></td>
        <td>In Stock</td>
        </tr>

       <?php
       }else if($product_data["pro_status_id"]== 2){
       ?>
       <tr class="table-danger">
        <th scope="row"><?php echo $product_data["id"]; ?></th>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["price"]; ?></td>
        <td><?php echo $product_data["qty"]; ?></td>
        <td>Out of Stock</td>
        </tr>
       <?php
       }else if($product_data["pro_status_id"]== 3){
       ?>
       <tr class="table-warning">
        <th scope="row"><?php echo $product_data["id"]; ?></th>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["title"]; ?></td>
        <td><?php echo $product_data["price"]; ?></td>
        <td><?php echo $product_data["qty"]; ?></td>
        <td>Pending</td>
        </tr>
       <?php
       }
       ?>
  
    <?php
    }
    ?>

<?php
}
?>