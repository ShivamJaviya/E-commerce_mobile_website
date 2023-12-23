
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
    <form action="conn.php" method="POST">
    <body>
      <section class="Form my-4 mx-5">
        <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <img src="6.jpg" class="img-fluid" alt=""width="450px" >
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">Register Page</h1>
                <form>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="text" name="textusername" placeholder="Enter User Name :" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="email" name="mail" required     placeholder="Enter Youe Email :" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input type="password" name="password" require placeholder="Enter User password :" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                           
                            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                        </div>
                    </div>
                   
                   
                </form>

            </div>
        </div>
    </div>
      </section>
    </body>
    </form>
</html>
