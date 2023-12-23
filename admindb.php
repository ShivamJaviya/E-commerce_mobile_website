<?php
     if(isset($_POST['submit']))
     {
        $ext = pathinfo($_FILES['myfile']['name'],PATHINFO_EXTENSION);
        $upload="upload/".time().".$ext";
        if($ext=="jpeg"||$ext=="jpg")
        {
            if(move_uploaded_file($_FILES['myfile']['tmp_name'],$upload))
            {
                  
            }
            else
                echo "Errrroooor";
        }
        else
        {
            echo "Please Select jpg or jpeg File to Upload";
        }

        $name = $_POST['txtname'];
        $price=$_POST['txtprice'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $conn = mysqli_connect("localhost","root","","new");
        
        $query = "insert into data values(NULL,'$name','$price',NULL,'$ip',1,'$upload')";
       
        if(mysqli_query($conn,$query) == true)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Record Inserted")';  
            echo '</script>';
            include("adminindex.php");
        }
        else
        {
            echo "<h1> Record Not Inserted!!!</h1>";
        }
        mysqli_close($conn);
    }
    
?>