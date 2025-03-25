<!DOCTYPE html>

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
      <?php include "header.php";
      session_start();
      if (!(isset($_SESSION['username']))) {
        echo "<script>";
        echo 'window.location.href="index.php";';
        echo "</script>";
    }

    
      
      ?>
            <?php include "footer.php";

              $servername = "localhost:3307";
              $username = "root";
              $password="";
              $dbname="ptm";
              $conn = new mysqli($servername, $username, $password, $dbname);

              $username= $_SESSION['username'];
              $queryState = "Select city from districtadmin where username='$username'";      //state of the admin is fetched
              $result1 = $conn->query($queryState);
              $row = mysqli_fetch_array($result1);
              //echo $row['city'];

              $StateStored = $row['city'];   //state of admin is stored here
              //echo "$StateStored";

      ?>

      

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
              View Properties
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">District Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">View properties</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">View Properties</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <th>Ulbid</th>
                          <th>city</th>
                          <th>state</th>
                          <th>cr</th>
                          <th>GT1S</th>
                          <th>GT1E</th>
                          <th>GT1R</th>

                          <th>GT2S</th>
                          <th>GT2E</th>
                          <th>GT2R</th>

                          <th>GT3S</th>
                          <th>GT3E</th>
                          <th>GT3R</th>

                          <th>GT4S</th>
                          <th>GT4E</th>
                          <th>GT4R</th>

                          <th>GT5S</th>
                          <th>GT5E</th>
                          <th>GT5R</th>

                          <th>generalTax</th>
                          <th>fireTax</th>
                           <th>treeTax</th>
                          <th>water Benefit Tax</th>
                          <th>generalconsTax</th>
                          <th>sewageTax</th>
                          <th>streetTax</th>
                          <th>nmcEduTax</th>
                        
                        
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                            require 'db.php';
                            $select = "select * from citytaxtable ";
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
                          <td name="Ulbid">'.$data["Ulbid"].'</td>
                          <td name="city">'.$data["city"].'</td>
                          <td >'.$data["state"].'</td>
                          <td><label class="">'.$data["cr"].'</label></td>
                          <td class="text-danger">'.$data["GT1S"].'</td>
                          <td >'.$data["GT1E"].'</td>                          
                          <td >'.$data["GT1R"].'</td>
                          <td><label class="">'.$data["GT2S"].'</label></td>
                          <td><label class="">'.$data["GT2E"].'</label></td>
                          <td><label class="">'.$data["GT2R"].'</label></td>
                          <td><label class="">'.$data["GT3S"].'</label></td>
                          <td><label class="">'.$data["GT3E"].'</label></td>
                          <td><label class="">'.$data["GT3R"].'</label></td>
                          <td><label class="">'.$data["GT4S"].'</label></td>
                          <td><label class="">'.$data["GT4E"].'</label></td>
                          <td><label class="">'.$data["GT4R"].'</label></td>
                          <td><label class="">'.$data["GT5S"].'</label></td>
                          <td><label class="">'.$data["GT5E"].'</label></td>
                          <td><label class="">'.$data["GT5R"].'</label></td>

                          <td name="generalTax">'.$data["generalTax"].'</td>
                          <td name="fireTax">'.$data["fireTax"].'</td>
                          <td name="treeTax">'.$data["treeTax"].'</td>
                          <td name="waterBenefitTax">'.$data["waterBenefitTax"].'</td>

                          <td name="generalConsTax">'.$data["generalConsTax"].'</td>
                          <td name="sewageTax">'.$data["sewageTax"].'</td>
                          <td name="streetTax">'.$data["streetTax"].'</td>
                          <td name="nmcEduTax">'.$data["nmcEduTax"].'</td>
                          
               

                        
                  
                          <td style="font-size: 16px;">

                          
                       
                                                  
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

  <!--    <td name="ulbid">'.$data["ulbid"].'</td>
                          <td >'.$data["name"].'</td>
                          <td><label class="">'.$data["email"].'</label></td>
                          <td class="text-danger">'.$data["mobileno"].'</td>
                          <td >'.$data["state"].'</td>                          
                          <td >'.$data["city"].'</td>
                          <td><label class="">'.$data["address"].'</label></td>
                          <td><label class="">'.$data["surveyno"].'</label></td>
                          <td><label class="">'.$data["plotno"].'</label></td>
                          <td><label class="">'.$data["carpetarea"].'</label></td>
                          <td><label class="">'.$data["propertytype"].'</label></td>
                          <td style="font-size: 16px;"> -->
 