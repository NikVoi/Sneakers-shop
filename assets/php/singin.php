<?php
    session_start();
    require_once 'connect.php'; 
 
    $login = $_POST['login'];
    $pass = $_POST['pass'];
   

    $adminLogin = 'admin';

    $check_user = mysqli_query($connect, "SELECT * FROM select_user where `Login_users`= '$login' and `Pass_users` = '$pass' ");

    if (mysqli_num_rows($check_user) > 0){

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id_users" => $user['id_users'],
            "Login_users" => $user['Login_users'],
            "Pass_users" => $user['Pass_users'],
            "User_role" => $user['User_role'] 
        ];
        
        if ($_SESSION['user']['User_role'] == $adminLogin)
        {
            header('Location: ../../sing-in-admin/admin-admin.php');
        }else{
            header('Location: ../../sing-in/index-sing_in.php');
        }
           
       
    }else{
        print_r('Неверный пароль!');
    }
?>

