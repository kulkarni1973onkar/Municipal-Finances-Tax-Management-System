<?php

session_start();
include'db.php';
if(!(isset($_SESSION['username'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?><!DOCTYPE html>

<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:40 GMT -->
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
  <link rel="shortcut icon" href="images/favicon.png" />
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
              View District Admin
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">District Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">View District Admin</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View District Admin</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>ULB_Id</th>
                          <th>ULB_Name</th>
                          <th>Email</th>
                          <th>Mobile no</th>
                          <th>State</th>
                          <th>City</th>
                          <th>Username</th>
                          <th>Password</th>                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                            require 'db.php';
                            $select = "select * from districtadmin where c_status ='1'";
//                            mysqli_query($con,"SET CHARACTER SET 'utf8'");
  //                          mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                                                          //echo $select;
                             $i=1;
                              if ($result = $con->query($select))
                                 {
                                       while ($data = $result->fetch_assoc())
                                       {
                                          echo'
                        <tr>
                          <td name="id">'.$data["ulb_id"].'</td>
                          <td >'.$data["name"].'</td>
                          <td><label class="">'.$data["email"].'</label></td>
                          <td class="text-danger">'.$data["mobileno"].'</td>
                          <td >'.$data["state"].'</td>                          
                          <td >'.$data["city"].'</td>
                          <td><label class="">'.$data["username"].'</label></td>
                          <td><label class="">'.$data["password"].'</label></td>
                          
                          <td style="font-size: 16px;">
                          <a href="edit_localadmin.php?ulb_id='.$data["ulb_id"].'">
                          <i class="fas fa-edit "style="margin-right:3%;color: green" ></i>
                          
                         <!-- <a href="edit_localadmin.php?ulb_id='.$data["ulb_id"].'">
                          <i class="fas fa-eye " style="color: blue" ></i> -->
                          
                           <a href="javascript:;" class="del" data-userid = '.$data["ulb_id"].'><i class="fas fa-trash" style="color: red"></i></a> 
                           </td>                        
                        </tr>
                        ';}}?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include "footer.php";?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:41 GMT -->
</html>
 <script type="">
      $(".del").click(function () {
          var ulb_id = $(this).data('id');
          var c = confirm("Do you want to delete Local Admin");
          if(c)
          {
           $.ajax({
             type: "POST",
             data : {"id":id},
             url : "delete_localadmin.php",
             success : function (data) {
               if(data == "1")
               {
                 alert("Collector Deleted !");
                 window.location.reload();
               }
             }
           })
          }
        }) 
  
  </script> 
 