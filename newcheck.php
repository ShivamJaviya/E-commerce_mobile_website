<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-4.6.1/dist/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap-4.6.1/dist/js/jquery.js"></script>
    <script src="bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="fontawesome-6/css/all.css">
</head>
<body class="container">
  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong class="form-text text-muted font-italic">SORRY!!Your password and username incorrcet!!!!please try again.</strong>
   <button type="button" class="close" data-dismiss="alert" area-lable="close">
      <span aria-hidden="true">&times;</span>
   </button>
  </div>
  
      <?php
         if(isset($_POST['submit']))
         {
               $username = $_POST['textname'];
               $password=$_POST['password'];
               $password=md5($password);

               $conn = mysqli_connect("localhost","root","","new");
               
               $qurey = "select * from user where name='$username' and password='$password'";

               $result = mysqli_query($conn,$qurey);
               $count = mysqli_num_rows($result);

               if($count == 0)
               {    
                  include "login.php";
               }
               else
               {
                  session_start();
                  $row = mysqli_fetch_array($result);
                  $_SESSION['userid'] = $row['id'];
                  $_SESSION['roleid'] = $row['roleid'];
                  header("Location: ./adminindex.php");          
               }
               mysqli_close($conn);

         }
         else
         header("Location: ./login.php");
         

      ?>

</body>
</html>