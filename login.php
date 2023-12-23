<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap-4.6.1/dist/css/bootstrap.css">
    <script src="bootstrap-4.6.1/dist/js/jquery.js"></script>
    <script src="bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>
    <script src="angular/angular.js"></script>
    <script src="angular-1.8.2/angular.js"></script>
    <link rel="stylesheet" href="fontawesome-6/css/all.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(219,226,226);
        }
        .row{
            background-color: white;
            border-radius: 30px;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
    </style>
</head> 
    <form action="newcheck.php" method="POST">
    <body>
      <section class="Form my-4 mx-5">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="2.jpg" class="img-fluid" alt="" >
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Login Page</h1>
                <form>
                <div class="form-row">
                       <p class="bg-success text-white">
                        <?php 
                       
                        if(isset($_SESSION['msg']))
                        {
                            print_r($_SESSION['msg']);
                        }
                        ?>
                       </p>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="textname" placeholder="Enter User Name :  " class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="password" placeholder="***********" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                        
                        <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                        
                        </div>       
                    </div>
                    <P>Dont't have an account<a href="reg.php">Register here</a></p>
                    <P>Dont't have an account<a href="forgot.php">Forget Password</a></p>
                </form>

            </div>
        </div>
    </div>
      </section>
    </body>
    </form>
</html>
