<?php

session_start();

//include 'conn.php';
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $conn = mysqli_connect("localhost","root","","new");
    $update="update user set status='active' where token='$token'";
    $qurey=mysqli_query($conn,$update);
    if($qurey){
        if(isset($_SESSION['msg']))
        {
            $_SESSION['msg']="account success";
            header('location:login.php');

        }
        else{
            $_SESSION['msg']="account unsuccess";
            header('location:login.php');
        }
    }
}
else{
    $_SESSION['msg']="not apdate";
    header('location:login.php');
}
?>