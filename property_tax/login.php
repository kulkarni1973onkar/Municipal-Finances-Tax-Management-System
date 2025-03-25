<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="http://www.urbanui.com/" />






</head>
<body>

<?php


        $servername = "localhost:3307";
        $username = "root";
        $password="";
        $dbname="tax";
        $conn = new mysqli($servername, $username, $password, $dbname);
      


        if (!$conn){
            die("Connection failed" .mysqli_error());
        }
   
        
        $login = false;
        $showError = false;
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            
            $id = $_POST["id"];
            $pass = $_POST["pass"]; 
            
             
            $sql = "Select * from all_admins where id='$id' AND password='$pass'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                header("location: dashboard.php");
        
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }

      

?>



    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div>
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>





<div class="row">
  <div class="col-md-6 grid-margin stretch-card my-2 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Login form</h4>
                    <p class="card-description">
                      Admin login form
                    </p>
                    <form class="forms-sample" action="login.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Admin id</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="id" placeholder="Admin ID">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputUsername1" placeholder="Password">
                      </div>

              
                
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
    
                    </form>
                  </div>
                </div>
              </div>

              

</div>





  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <script src="../../js/owl-carousel.js"></script>
    
</body>



</html>