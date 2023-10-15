<?php
    require_once 'connect.php';

    $Product_name = $_POST['Product_name'];
    $Product_price = $_POST['Product_price'];
    $Product_size = $_POST['Product_size'];
    $Product_manufacturer = $_POST['Product_manufacturer'];
    $Product_color = $_POST['Product_color'];
    $Product_count = $_POST['Product_count'];
    $Product_description = $_POST['Product_description'];
    $Product_img = $_POST['Product_img'];

    mysqli_query($connect," INSERT INTO `product`(`Product name`, `Product_Units_measurement`, `Product_Price`, `Product_Manufacturer`, `Product_img`, `Product_color`, `Product_count`, `Product_description`) 
    VALUES 
    ('$Product_name','$Product_size','$Product_price','$Product_manufacturer','$Product_img','$Product_color','$Product_count','$Product_description')");

    header('Location: ../../sing-in-admin/admin-add-product.php');

?>