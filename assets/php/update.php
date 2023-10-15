<?php
    require_once 'connect.php';

    $id = $_POST['id'];
    $Product_name = $_POST['Product_name'];
    $Product_price = $_POST['Product_price'];
    $Product_size = $_POST['Product_size'];
    $Product_manufacture = $_POST['Product_manufacturer'];
    $Product_color = $_POST['Product_color'];
    $Product_count = $_POST['Product_count'];
    $Product_description = $_POST['Product_description'];
    $Product_img = $_POST['Product_img'];

    mysqli_query($connect," UPDATE `product` SET 
    `Product_name`='$Product_name',
    `Product_Units_measurement`='$Product_size',
    `Product_price`='$Product_price',
    `Product_manufacture`='$Product_manufacture'
    `Product_img`='$Product_img',
    `Product_color`=' $Product_color',
    `Product_count`='$Product_count',
    `Product_description`='$Product_description' 
    WHERE `product`.`Id_product` = '$id'");


    header('Location: /sing-in-admin/admin-info-product.php')
    
?>