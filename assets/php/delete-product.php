<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    $deletes = mysqli_query($connect,"DELETE FROM `product` WHERE `product`.`Id_product` = '$id' ");

    header('Location: /sing-in-admin/admin-info-product.php')
?>