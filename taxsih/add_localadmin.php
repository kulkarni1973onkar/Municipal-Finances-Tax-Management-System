<?php

session_start();
include'db.php';
if(!(isset($_SESSION['username'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>

<!DOCTYPE html>
<html lang="en"> 
<!-- Hello -->
<!-- World -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Property Tax Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include "header.php";?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
  
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include "navbar.php";?>
      <!-- partial -->
     <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Add Local Admin
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">District Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add District Admin</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Local Admin</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                  <form class="forms-sample" method="POST" action="" id="myForm">
                    <div class="form-group">
                      <label for="exampleInputUsername1">ULB Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" Name="name" required placeholder="Name">
                    </div>                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" Name="email" required placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="text" class="form-control" id="exampleInputmobilenumber" Name="mobileno" required placeholder="Mobile Number"  onKeyPress="if(this.value.length==10) return false;"s>
                    </div>
                    <!-- State Drop down list -->
                    <div class="form-group">
                      <label for="exampleInputUsername1">State</label>
                      <input type="text" class="form-control" id="exampleInputstate1" Name="state" required placeholder="Enter State name">
                    </div> 
                    <!-- City Drop down list -->
                    <div class="form-group">
                      <label for="exampleInputUsername1">City</label>
                      <input type="text" class="form-control" id="exampleInputcity1" Name="city" required placeholder="Enter City name">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" Name="username" required placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" Name="password" required placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                     <button class="btn btn-light" onclick="myFunction()">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          
          </div>
        </div>
       <?php include "footer.php";?>
        <!-- partial -->
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<script>
function myFunction() {
  document.getElementById("myForm").reset();
}

</script>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>

<?php
include'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
extract($_POST);
$query="INSERT INTO `districtadmin`(`name`, `email`, `mobileno`, `state`, `city`, `username`, `password`, `c_status`) VALUES ('$name','$email','$mobileno','$state','$city','$username','$password','1')";

$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Local Admin Added Successfully');";
  echo 'window.location.href="view_localadmin.php";';
  echo '</script>';
}  
else
{ 
  echo '<script type="text/javascript">';
  echo " alert('Fill Again The Registration Form.');";
  echo 'window.location.href = "add_localadmin.php";';
  echo '</script>';
}

}
?>