<?php
session_start();
    include('config.php');
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $query3 = "SELECT * from users where user_email = '$user_email' AND user_password = '$user_password'";

    $result3 = mysqli_query($conn, $query3);
    $data3 = mysqli_fetch_array($result3);
    if(mysqli_num_rows($result3) > 0){
        header("Location:index.php");
    }
    else{
        
        header("Location:login.php");
    }
    
?>