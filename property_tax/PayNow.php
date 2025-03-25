<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Enter index number</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="http://www.urbanui.com/" />

</head>
<style>

div.navPics {
 
   background-image: url("images/back1.jpg");
   height:250px;

}

.round{
    border-radius: 25px;
}
.small1{
    height:80px
}
</style>


<?php


        $servername = "localhost:3307";
        $username = "root";
        $password="";
        $dbname="tax2";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // connect end


        if (!$conn){
            die("Connection failed" .mysqli_error());
        }
        

        // if($_SERVER["REQUEST_METHOD"] == "POST"){

        //   $PropertyId = $_POST['PropertyId'];
        //   $city = $_POST['city'];

        //   echo $PropertyId;
        //   echo $city;


        // }
      
        


      

?>





<body>
 

    <div class="container-fluid navPics" >
        <div class="row ">
        <div class="col-md-6">
                <div class="brand py-2">
                                            <a href="home.php" class="navbar-brand"> <img src="images/mainLogo1.png" alt="India's Property Tax" class="img-fluid round"> </a>
                                            </div></div>


                <div class="col-md-6 ">
                     <div class="rightside text-end brand py-2">
                         <img src="images/images/indiaflag1.jpeg" alt="India's Property Tax" class="float-right small1" height="117px">
                    </div>
                </div>
                         
  

        </div>
    </div>
 




    

    
    <div >
        <nav class="navbar col-lg-12 col-12 p-0 d-flex flex-row default-layout-navbar">
         
            <div class="template-demo mx-4 pb-3">
                        <button type="button" class="btn btn-primary btn-rounded btn-fw">
                            <a href="Home2.php" target="_blank" style="color: inherit;text-decoration: none;">Home</a>
                        </button>
                        <button type="button" class="btn btn-primary btn-rounded btn-fw">Get More information</button>

                        <button type="button" class="btn btn-primary btn-rounded btn-fw">contact us</button>

                          <button type="button" class="btn btn-primary btn-rounded btn-fw">
                            <a href="http://localhost/taxsih/index.php" style="color: inherit;text-decoration: none;">Login superadmin</a>
                        </button>

                        <button type="button" class="btn btn-primary btn-rounded btn-fw">
                            <a href="http://localhost/taxsih/adminlogin/adminindex.php" style="color: inherit;text-decoration: none;">Login admin</a>
                        </button>
                    </div>

                   

                    <div class="nav-link">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                            </div>
                    </div>
                   
                    

        </nav>
        
    </div>


<div class="row">


    <div class="card my-5 mx-3 col-md-6 grid-margin stretch-card">
    <div class="card-body">
                            <h4 class="card-title">Notice</h4>
                            <ul class="solid-bullet-list">
                                <li>
                                    <h6>Index number</h6>
                                    <p>For index No. with seven digit. Please add zero (0) after 1st 3 digit for ex. old Index No-1234567. The new Index No after adding Zero (0) will be 12304567 </p>
                                    <p class="text-muted">
                                        <i class="far fa-clock"></i>
                                        7 months ago.
                                    </p>
                                </li>
                                <li>
                                    <h6>Length</h6>
                                    <p>The Property Tax bearer with existing Index No of 8 digit need not follow the above process. </p>
                                    <p class="text-muted">
                                        <i class="far fa-clock"></i>
                                        7 months ago.
                                    </p>
                                </li>
                                <li>
                                    <h6>Old and new index number</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing </p>
                                    <p class="text-muted">
                                        <i class="far fa-clock"></i>
                                        7 months ago.
                                    </p>
                                </li>
                            </ul>
                        </div>
              </div>


      <div class="card my-5 mx-3 col-md-5 grid-margin stretch-card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" method = "POST" action = "user_viewDemand.php">

                

                  <div class="form-group">
                      <label for="exampleInputUsername1">city</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="city" placeholder="city">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputUsername1">Property Id</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="PropertyId" placeholder="Property Id">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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

  <script src="js/dashboard.js"></script>
 




    

    
</body>



</html>