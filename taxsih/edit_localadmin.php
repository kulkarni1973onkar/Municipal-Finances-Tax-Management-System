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


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Revenue Management System</title>
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
              Edit Collector
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Collector</a></li>
                <li class="breadcrumb-item"><a href="view_localadmin.php">Collector</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Collector</li>
                </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Collector</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                   <?php 
                  include "db.php";
                  $asd = mysqli_query($con,"select * from districtadmin where ulb_id='".$_GET['ulb_id']."'") or die (mysqli_error($con));
                  $Total = mysqli_num_rows($asd);
                  ?>
                  <?php while($fetch=mysqli_fetch_array($asd)){
                  extract($fetch)

                  ?>
                  <form class="forms-sample" method="POST" action="" id="">
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $id;?>">
                      <label for="exampleInputUsername1">ULB Name</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $name;?>" Name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email;?>" Name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Mobile Number</label>
                      <input type="Number" class="form-control" id="exampleInputmobilenumber" value="<?php echo $mobileno;?>" Name="mobileno" placeholder="Mobile Number"  pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
                    </div>
                    <!-- <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $id;?>">
                      <label for="exampleInputUsername1">State</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $state;?>" Name="state" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $id;?>">
                      <label for="exampleInputUsername1">City</label>
                      <input type="text" class="form-control" id="exampleInputname1" value="<?php echo $city;?>" Name="city" placeholder="Name">
                    </div> -->
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $username;?>" Name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password;?>" Name="password" placeholder="Password">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Update</button>
                    <a href="view_localadmin.php" class="btn btn-light">Cancel</a>
                    
                  </form>
                <?php }?>
                </div>
              </div>
            </div>
          
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php include "footer.php";?>
        <!-- partial -->
      </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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
// $query="UPDATE `collector_info` SET `c_name`='$name1',
//                                     `c_mobile`='$mobilenumber',
//                                     `c_email`='$email',
//                                     `c_username`='$username',
//                                     `c_password`='$password'
//                                      WHERE `ulb_id`='$ulb_id';";

$query="UPDATE `districtadmin` SET  `name`='$name',
                                    `email`='$email',
                                    `mobileno`='$mobileno',
                                    `username`='$username',
                                    `password`='$password'
                                     WHERE `ulb_id`='$ulb_id';";
$asd = mysqli_query($con,$query)or die(mysqli_error($con));

if($asd)
{
  echo '<script type="text/javascript">';
  echo " alert('Local Admin Update Successfully');";
  echo 'window.location.href = "view_localadmin.php";';
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