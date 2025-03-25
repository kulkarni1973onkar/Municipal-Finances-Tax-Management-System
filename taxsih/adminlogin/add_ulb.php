<?php

session_start();
include'db.php';
if(!(isset($_SESSION['username'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}

            $servername = "localhost:3307";
              $username = "root";
              $password="";
              $dbname="ptm";
              $conn = new mysqli($servername, $username, $password, $dbname);
              $username= $_SESSION['username'];
              $queryState = "Select city from districtadmin where username='$username'";      //state of the admin is fetched
              $result1 = $conn->query($queryState);
              $row = mysqli_fetch_array($result1);
              echo $row['city'];

              $StateStored = $row['city'];   //state of admin is stored here
              echo "$StateStored";

              if($_SERVER["REQUEST_METHOD"] == "POST"){

            
                $Ulbid = $_POST["Ulbid"];
                $city = $_POST["city"]; 
                $state = $_POST["state"];
        
                $cr = $_POST["cr"];
        
                $GT1S = $_POST["GT1S"];
                $GT1E = $_POST["GT1E"];
                $GT1R = $_POST["GT1R"];
        
                $GT2S = $_POST["GT2S"];
                $GT2E = $_POST["GT2E"];
                $GT2R = $_POST["GT2R"];
        
                $GT3S = $_POST["GT3S"];
                $GT3E = $_POST["GT3E"];
                $GT3R = $_POST["GT3R"];
        
                $GT4S = $_POST["GT4S"];
                $GT4E = $_POST["GT4E"];
                $GT4R = $_POST["GT4R"];
        
                $GT5S = $_POST["GT5S"];
                $GT5E = $_POST["GT5E"];
                $GT5R = $_POST["GT5R"];
        
                $generalTax = $_POST["generalTax"];
                $fireTax = $_POST["fireTax"];
                $treeTax = $_POST["treeTax"];
                $waterBenefitTax = $_POST["waterBenefitTax"];
                $generalConsTax = $_POST["generalConsTax"];
                $sewageTax = $_POST["sewageTax"];
                $streetTax = $_POST["streetTax"];
                $nmcEduTax = $_POST["nmcEduTax"];

                $queryAddUlb = "INSERT into cityTaxTable(Ulbid,city,state,cr,GT1S,GT1E,GT1R,GT2S,GT2E,GT2R,GT3S,GT3E,GT3R,GT4S,GT4E,GT4R,GT5S,GT5E,GT5R,generalTax,fireTax,treeTax,waterBenefitTax,generalConsTax,sewageTax,streetTax,nmcEduTax) VALUES ('$Ulbid', '$city','$state','$cr','$GT1S','$GT1E','$GT1R','$GT2S','$GT2E','$GT2R','$GT3S','$GT3E','$GT3R','$GT4S','$GT4E','$GT4R','$GT5S','$GT5E','$GT5R','$generalTax','$fireTax','$treeTax','$waterBenefitTax','$generalConsTax','$sewageTax','$streetTax','$nmcEduTax')";   
                $conn->query($queryAddUlb);   

             
            
            
            }




 ?>

<!DOCTYPE html>
<html lang="en"> 
<!-- Hello -->
<!-- World -->
<head>
  <!--  meta tags -->
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
              Add User
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
                  <h4 class="card-title">Add User</h4>
                  <p class="card-description">
                    Please Fill the Details
                  </p>
                    <form class="forms-sample" action="add_ulb.php" method="POST"  id="myForm">
    

                    <div class="form-group">
                      <label for="exampleInputUsername1">Ulbid</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="Ulbid"  placeholder="ulbid">
                    </div>   

                    <div class="form-group">
                      <label for="exampleInputUsername1">city</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="city"  placeholder="ulbid">
                    </div>   

                    <div class="form-group">
                      <label for="exampleInputUsername1">state</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="state"  placeholder="ulbid">
                    </div>   

                    <div class="form-group">
                      <label for="exampleInputUsername1">cr</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="cr"  placeholder="ulbid">
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputUsername1">GT1S</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT1S"  placeholder="ulbid">
                    </div> 
                    
                    <div class="form-group">
                      <label for="exampleInputUsername1">GT1E</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT1E"  placeholder="ulbid">
                    </div> 
                    
                    <div class="form-group">
                      <label for="exampleInputUsername1">GT1R</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT1R"  placeholder="ulbid">
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputUsername1">GT2S</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT2S"  placeholder="ulbid">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputUsername1">GT2E</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT2E"  placeholder="ulbid">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputUsername1">GT2R</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT2R"  placeholder="ulbid">
                    </div> 
                    

                    <div class="form-group">
                      <label for="exampleInputUsername1">GT3S</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT3S"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT3E</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT3E"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT3R</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT3R"  placeholder="ulbid">
                    </div> 

                    <div class="form-group">
                      <label for="exampleInputUsername1">GT4S</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT4S"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT4E</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT4E"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT4R</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT4R"  placeholder="ulbid">
                    </div> 
                    

                    <div class="form-group">
                      <label for="exampleInputUsername1">GT5S</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT5S"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT5E</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT5E"  placeholder="ulbid">
                    </div>  <div class="form-group">
                      <label for="exampleInputUsername1">GT5R</label>
                      <input type="text" class="form-control" id="exampleInputUlbid1" Name="GT5R"  placeholder="ulbid">
                    </div> 
                    
                
    

            <label for="">General tax</label>
            <input type="number" name="generalTax"><br/><br/>

            <label for="">Fire tax</label>
            <input type="number" name="fireTax"><br/><br/>

            <label for="">Tree tax</label>
            <input type="number" name="treeTax"><br/><br/>

            <label for="">Water Benefit tax</label>
            <input type="number" name="waterBenefitTax"><br/><br/>

            <label for="">General Conservancy tax</label>
            <input type="number" name="generalConsTax"><br/><br/>

            <label for="">Sewage Benefit tax</label>
            <input type="number" name="sewageTax"><br/><br/>

            <label for="">Street tax</label>
            <input type="number" name="streetTax"><br/><br/>

            <label for="">NMC education tax</label>
            <input type="number" name="nmcEduTax"><br/><br/>





            <input type="submit" value="Submit" name="submit">
            <br>
            
            <br>
            <br>
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
