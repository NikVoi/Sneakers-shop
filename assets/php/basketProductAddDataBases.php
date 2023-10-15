<?php
    require_once 'connect.php';

    $User_login = $_POST['name_user'];
    $User_mail = $_POST['user_mail'];
    $BasketProductName = $get['BasketProductName'];
    $BasketProductCounter = $_POST['BasketProductCounter'];
    $BasketProductPrice = $_POST['BasketProductPrice'];
    $BasketProductSize = $_POST['Product_size'];
    $date = date("Y-m-d");


    echo ($User_login );
    echo ($User_mail );
    echo ($BasketProductName);
    echo ($BasketProductCounter);
    echo ($BasketProductPrice);
    echo ($BasketProductSize);
    echo ($date);

    // mysqli_query($connect,"INSERT INTO `order` ( `Order_date`, `Client_login`, `Product_name`, `Quantity`, `ProductPrice`, `ProductSize`, `UserEmail`) 
    // VALUES 
    // ('$date','$User_login','$BasketProductName','$BasketProductCounter','$BasketProductPrice','$Product_color','$Product_count','$BasketProductSize')");




    
?>