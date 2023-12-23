<?php

if(isset($_POST['submit']))
 {
    $username=$_POST['textusername'];
    $email=$_POST['mail'];
    $password=$_POST['password'];
    $password=md5($password);
    $ip=$_SERVER['REMOTE_ADDR'];
    $token=bin2hex(random_bytes(15));

    $conn = mysqli_connect("localhost","root","","new");
    $qurey = "insert into user values(NULL,'$username','$email','$password','NULL','$ip','$token','inactive',2)";

    if(mysqli_query($conn,$qurey)==true)
    {
        $subject = "Simple Email Test via PHP";
        $body = "Hi,$username http://localhost:8080/php/front/activate.php?token=$token";
        $headers = "From: 20bca006@charusat.edu.in";

        if (mail($email, $subject, $body, $headers)) {
            session_start();
            $_SESSION['msg']="check your mail $email";
            header("Location: ./login.php");
        
        } else {
            echo "Email sending failed...";
        }
    }
    else
    {
        echo "<h1>Record NOT inserted </h1>";
    }

}
 else
 {
    //header("Location: ./login.php");
 }

?>