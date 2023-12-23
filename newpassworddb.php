<?php
    if(isset($_POST['submit']))
    {
        $email= $_POST['mail'];
        $password= $_POST['pass'];  
        $password = md5($password);
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","new");

        $query1 = "select * from user where email='$email'";
        $record1 =mysqli_query($conn,$query1);

        $userdata = mysqli_fetch_array ($record1);
        $username = $userdata ['username'];
        $token = $userdata ['token'];

        $query = "update user set password='$password' where token='$token'";
        $record =mysqli_query($conn,$query);
        if($record == true)
        {
            echo "password change";
            include "login.php";
        }
        else
        {
            echo "Password does not change";
        }
        mysqli_close($conn);
    }

    else
    {
        header("Location: ./login.php");
    }
?>