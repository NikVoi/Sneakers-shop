<?php
    require_once 'connect.php';

    $id = $_GET['id'];

    $deletes = mysqli_query($connect,"DELETE * FROM `invoice` WHERE `invoice`.`id_invoice` = '$id' ");

    header('Location: /sing-in-admin/admin-info-invoice.php')
?>