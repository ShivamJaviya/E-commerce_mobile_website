<?php

    if(isset($_POST['submit']))
    {
        
        $email= $_POST['email'];

        $conn = mysqli_connect("localhost","root","","new");
        
            $query = "select * from user where email='$email'";
            $record =mysqli_query($conn,$query);
            $emailcount = mysqli_num_rows($record);
            
            if($emailcount)
            {
                $userdata = mysqli_fetch_array ($record);
                $username = $userdata ['username'];
                $token = $userdata ['token'];

                $subject = "Reset password through PHP";
                $body= "Hi, $username . Click here to reset your account password http://localhost:800/php/front/newpassword.php?token=$token";
                $headers = "From: 20bca006@charusat.edu.in";

                if(mail($email, $subject, $body, $headers)) 
                {
                    print_r( "Email successfully sent to $email ...");
                    $_SESSION['msg']="check your mail to reset your account password $email";
                    header("Location: ./newpassword.php");
                }
                else
                {
                    echo "Email sending failed...";
                }
            }
            else
            {
                echo "<h1> Record Not Found</h1>";
            } 
        
        mysqli_close($conn);
    }
    //}
    else
    {
        header("Location: ./login.php");
    }
    
?>