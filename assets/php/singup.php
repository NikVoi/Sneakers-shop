<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    // $pass_repeat = $_POST['pass_repeat'];


    // $pass = $pass;

    mysqli_query($connect, "INSERT INTO `users` (`Login_users`, `Pass_users`, `User_email`) VALUES ('$login', '$pass','$email')");

    header('Location: ../../index.php');

?>