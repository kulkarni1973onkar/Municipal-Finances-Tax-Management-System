<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>view demand</title>

  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="http://www.urbanui.com/" />






</head>

<?php
    $servername = "localhost:3307";
    $username = "root";
    $password="";
    $dbname="ptm";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if (!$conn){
      die("Connection failed" .mysqli_error());
    }
    $PropertyId =  $_GET['PropertyId'];
    $city = $_GET['city'];
    $total = $_GET['total'];
    echo $city;
    echo $PropertyId;
    echo $total;

    $queryOwner = "Select name from $city where property_id='$PropertyId'";      //state of the admin is fetched
    $result1 = $conn->query($queryOwner);
    $row = mysqli_fetch_array($result1);
    $personName = $row['name'];

    $queryEmail = "Select email from $city where property_id='$PropertyId'";
    $result2 = $conn->query($queryEmail);
    $row = mysqli_fetch_array($result2);
    $email1 = $row['email'];
    print $email1;



      





?>



<body>
 

   <div class="container-fluid navPics" >
        <div class="row ">
        <div class="col-md-6">
                <div class="brand py-2">
                                            <a  class="navbar-brand"> <img src="images/mainLogo1.png" alt="NMC Logo" class="img-fluid round"> </a>
                                            </div></div>

              

                <div class="col-md-6 ">
                     <div class="rightside text-end brand py-2">
                        <div class="float-right small1" height="117px">
                          <div>
                            <h5 style="display:inline">Date:</h5>
                            <h5 style="display:inline" type="date" id="date"></h5>
                          </div>
                          <div>
                            <h5 style="display:inline">User id:</h5>
                            <h5 style="display:inline" id="UsedID"><?php echo $PropertyId; ?></h5>
                          </div>
                          <div>
                            <h5 style="display:inline" id="UsedID"><?php echo $personName; ?></h5>
                          </div>
                        </div>
                    </div>
                </div>

                <script>
                  var today = new Date();
                  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                  console.log(date);
                  document.getElementById("date").innerHTML=date;
                </script>

                         
        

        </div>
    </div>
    

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
                <!-- <div class="card-body">
                  <h4 class="card-title">Block buttons</h4>
                  
                  <div class="template-demo">
            
                    <a href="user_viewDemand.php" style="color: inherit;text-decoration: none;">
                      <button type="button" class="btn btn-primary btn-lg btn-block my-3">
                        <i class="fa fa-location-arrow"></i>                      
                          View Demand
                      </button>
                    </a>

                    <a href="user_viewReceipt.php" style="color: inherit;text-decoration: none;">
                      <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="fa fa-file-archive"></i>                      
                          View Receipt
                      </button>
                    </a>

                    <a href="user_viewEbill.php" style="color: inherit;text-decoration: none;">
                      <button type="button" class="btn btn-primary btn-lg btn-block my-3">
                        <i class="fa fa-fax"></i>                      
                        view ebill
                      </button>
                    </a>

                    <a href="user_Logout.php" style="color: inherit;text-decoration: none;">
                      <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="fa fa-user"></i>                      
                        logout
                      </button>
                    </a>

                  </div> -->
                </div>
              </div>

              


    </div>

  


      

            <div class="col-md-7 grid-margin stretch-card">
                
            <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Payment of tax</h4>

                     
                            <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Notice</h4>
                                                <ul class="solid-bullet-list">
                                                    <li>
                                                        <h6> While making e-payment if receipt is not generated due to connectivity or technical problem, please check your bank account for debit and then proceed for next e-payment.</h6>
                                                    
                                                    </li>
                                                    <li>
                                                        <h6>If debit is made from bank account and receipt is not generated then please check update with NMC web site, a receipt will be available in next 5 working days.</h6>
                                              
                                                    </li>
                                                    <li>
                                                        <h6>All amounts paid hereunder shall be non-refundable once paid, Excess payment will be adjusted in next bill.</h6>
                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                   


                          

                           
	<br>
                                <div class="table-responsive my-2">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th>
                                            Owner name
                                        </th>
                                        <td>
                                        <?php echo $personName; ?>
                                        </td>
                                   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th>
                                            Property Id
                                        </th>
                                        <td>
                                        <?php echo $PropertyId; ?>
                                        </td>
                                        </tr>


                                        

                                


                                        <tr>
                                        <th>
                                        Payable Amount
                                        </th>
                                        <td>
                                        <?php echo ($total/12); ?>
                                        </td>
                                        </tr>

                                      

                                        <tr>
                                        <th>
                                        Email
                                        </th>
                                        <td>
                                        <?php echo $email1; ?>
                                        </td>
                                        </tr>

                                      
                                       
                                       
                                       
                                    </tbody>
                                    </table>
                                </div>
                            

                        <a href="payment/paymentPage.php?total=<?php echo ($total/12); ?>" target="_blank" style="color: inherit;text-decoration: none;">
                        
                            <button type="submit" class="btn btn-primary btn-lg btn-block" value="Pay Now">
                                <i class="fa fa-user"></i>                      
                                Pay the bills
                            </button>
                        </a>
                            
                        </div>
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

  <script src="js/dashboard.js"></script>
  




    

    
</body>



</html>