<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    $deletes = mysqli_query($connect,"DELETE FROM `order` WHERE `order`.`Order_number` = '$id' ");

    header('Location: /sing-in-admin/admin-info-order.php')
?>