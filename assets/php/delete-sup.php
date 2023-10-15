<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    $deletes = mysqli_query($connect,"DELETE FROM `supplier` WHERE `supplier`.`Suppliers_number`  = '$id' ");

    header('Location: /sing-in-admin/admin-info-product.php')
?>