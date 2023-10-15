<?php
    $connect = mysqli_connect('localhost','root','','sneakers_shop');

    if(!$connect){
        die('Error connect to DataBases');
    }
?>