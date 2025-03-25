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


    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $PropertyId = $_POST['PropertyId'];
      $city = $_POST['city'];

      //echo $PropertyId;
      //echo $city;


    }

  
  

    
    $queryOwner = "Select name from $city where property_id='$PropertyId'";      //state of the admin is fetched
    $result1 = $conn->query($queryOwner);
    $row = mysqli_fetch_array($result1);
    $personName = $row['name'];
    //echo $row['name'];

    //echo "<br>";
    $queryState2 = "Select carpetArea from $city where property_id='$PropertyId' ";   
    $result2 = $conn->query($queryState2);
    $row = mysqli_fetch_array($result2);
    //echo "Carpet Area : ";
    //echo $row['carpetArea'];
    $carpetArea = $row['carpetArea'];

////////
    $queryNo = "Select mobileno from $city where property_id='$PropertyId' ";   
    $result5 = $conn->query($queryNo);
    $row = mysqli_fetch_array($result5);
    //echo "Carpet Area : ";
    //echo $row['carpetArea'];
    $mobileno = $row['mobileno'];
    //echo $mobileno;

    //echo "<br>";
    $queryState3 = "Select cr from citytaxtable where ulbid=(Select ulbid from $city where property_id='$PropertyId') "; 
    $result3 = $conn->query($queryState3);
    $row = mysqli_fetch_array($result3);
    //echo "Common ratio : ";
    //echo $row['cr'];
    $cr = $row['cr'];

    //echo "<br>";
    $APV =  $carpetArea * $cr ;     //Anual property value
    //echo "APV : ";
    //echo $APV;

    //echo "<br>";
    $queryUlbid = "Select Ulbid from $city where property_id='$PropertyId' ";
    $result3 = $conn->query($queryUlbid);
    $row = mysqli_fetch_array($result3);
    //echo $row['Ulbid'];
    $Ulbid = $row['Ulbid'];

    //echo "<br>";


    for($n=1;$n<=5;$n++){    
      // echo "$n<br/>";
      // echo "GT{$n}S<br>";

      $startQuery = "Select GT{$n}S from citytaxtable where ulbid = '$Ulbid' ";
      $resultS = $conn->query($startQuery);
      $row1 = mysqli_fetch_array($resultS);
      $start =  $row1["GT{$n}S"];

      

      $endQuery = "Select GT{$n}E from citytaxtable where ulbid = '$Ulbid' ";
      $resultE = $conn->query($endQuery);
      $row = mysqli_fetch_array($resultE);
      $end =  $row["GT{$n}E"];

      //echo $start;
      //echo $end;
      //echo "<br>";


      if($APV >= $start and $APV  <= $end){  
          $rateQuery = "Select GT{$n}R from citytaxtable where ulbid = '$Ulbid' ";
          $resultR = $conn->query($rateQuery);
          $row = mysqli_fetch_array($resultR);
          $rate =  $row["GT{$n}R"]; 


          $updateQ = "UPDATE citytaxtable SET generalTax='$rate' where ulbid = '$Ulbid'";
          $conn->query($updateQ);

          



          //echo "rate1 :: ";
          //echo $rate;
          break;
      }  


  }   


  $Qt = "Select generalTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['generalTax'];
  $rate += $temp;

  $Qt = "Select fireTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['fireTax'];
  $rate += $temp;

  $Qt = "Select treeTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['treeTax'];
  $rate += $temp;

  $Qt = "Select waterBenefitTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['waterBenefitTax'];
  $rate += $temp;

  $Qt = "Select generalConsTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['generalConsTax'];
  $rate += $temp;

  $Qt = "Select sewageTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['sewageTax'];
  $rate += $temp;

  $Qt = "Select streetTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['streetTax'];
  $rate += $temp;

  $Qt = "Select nmcEduTax from citytaxtable where ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['nmcEduTax'];
  $rate += $temp;

  //echo "<br>Rate after :: ";
  //echo $rate;
  

  $total = $APV + ($APV * $rate / 100);
  //echo "<br>Tax calculated :: ";
  //echo $total;









    
   






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
                <div class="card-body">
                  <!-- <h4 class="card-title">Block buttons</h4>
                  
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
			<br>
				<div id="table-content table-responsive">
		
					<div class="clear">&nbsp;</div>
					<div class="demand_details">
						<fieldset>
							<legend> Nashik Muncipal Corporation 2022-2023</legend>
							<br>
							<fieldset>
								<br>
								<table width="100%" border="0" cellspacing="0" cellpadding="3">
                <tbody>
									<!-- <tbody><tr>
										<th width="20%" align="left"><span class="blue">Index No. :</span> 80401059</th>
										<th width="25%" align="left"><span class="blue">House No. :</span> 804/0804/003//</th>
										<th align="left"><span class="blue">Owner Name :</span> JOSHI SANJAY ARUN</th>
										<th colspan="2" align="left"></th>
									</tr>
									<tr>
										<th align="left"><span class="blue">COM. ARV. :</span> 0</th>
										<th align="left"><span class="blue">RES. ARV. :</span> 1858</th>
										<th align="left"><span class="blue">Total ARV. :</span> 1858</th>
										<th align="left"><span class="blue">Total ALV. :</span> 2064</th>
										<th align="left"><span class="blue">Solar Status :</span> </th>
									</tr> -->
								</tbody></table>
							</fieldset><br>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered" style="font-size:11px; padding:2px">
								<tbody><tr>
									<th rowspan="2" align="center" valign="top" width="30%">Tax Name</th>
								
									<th colspan="2" align="center" valign="top" width="35%">Current Demand</th>
								
								</tr>
								<tr>
								
					
									<th align="center" valign="top">Tax %</th>
									<th align="center" valign="top">Monthly tax</th>
							
								</tr>


                <tr>
                                   
                                   <td align="left" valign="top"><strong>APV</strong></td>
                                 
                                                     
                                 
                                                                     <td align="right" valign="top">0</td>
                                                                     
                                                                    
                                                                     
                                                                     <td align="right" valign="top"><?php echo $APV; ?></td>
                                                                     
                                                                   
                                                                     
                                                                   
                                                                     
                                                                     
                                                                 </tr>




								                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>GENERAL TAX  (सर्वसाधारण कर)</strong></td>

                        <?php 
                          $Qt = "Select generalTax from citytaxtable where Ulbid = '$Ulbid'";
                          $resultQt = $conn->query($Qt);
                          $row = mysqli_fetch_array($resultQt);
                          $temp = $row['generalTax'];

                          $tax = ($APV + ($APV * $temp / 100))/12;

                        ?>

                                    <td align="right" valign="top"><?php echo $temp; ?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                                  
                                    
                                  
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>FIRE TAX  (आग निवारण कर)</strong></td>

                    <?php 
                          $Qt = "Select fireTax from citytaxtable where Ulbid = '$Ulbid'";
                          $resultQt = $conn->query($Qt);
                          $row = mysqli_fetch_array($resultQt);
                          $temp = $row['fireTax'];
                          $tax = ($APV + ($APV * $temp / 100))/12;
                        ?>


                                    <td align="right" valign="top"><?php echo $temp; ?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                             
                                    
                                   
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>TREE TAX  (वृक्ष संवर्धन कर)</strong></td>

                    <?php 
                      $Qt = "Select treeTax from citytaxtable where Ulbid = '$Ulbid'";
                      $resultQt = $conn->query($Qt);
                      $row = mysqli_fetch_array($resultQt);
                      $temp = $row['treeTax'];
                      $tax = ($APV + ($APV * $temp / 100))/12;
                    ?>
                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                                   
                                    
                                 
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>GEN CONSERVENACY TAX  (सर्व साधारण स्वच्छता कर)</strong></td>

                <?php
                 $Qt = "Select generalConsTax from citytaxtable where Ulbid = '$Ulbid'";
                 $resultQt = $conn->query($Qt);
                 $row = mysqli_fetch_array($resultQt);
                 $temp = $row['generalConsTax'];
                 $tax = ($APV + ($APV * $temp / 100))/12;
                 
                ?>


                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                                  
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>WATER BENIFIT  (जललाभ कर)</strong></td>
  <?php
    $Qt = "Select waterBenefitTax from citytaxtable where Ulbid = '$Ulbid'";
    $resultQt = $conn->query($Qt);
    $row = mysqli_fetch_array($resultQt);
    $temp = $row['waterBenefitTax'];
    $tax = ($APV + ($APV * $temp / 100))/12;
                ?>
                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                                  
                                   
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>SEWARAGE BENIFIT TAX  (मल निस:रण लाभ कर)</strong></td>
  <?php
  $Qt = "Select sewageTax from citytaxtable where Ulbid = '$Ulbid'";
  $resultQt = $conn->query($Qt);
  $row = mysqli_fetch_array($resultQt);
  $temp = $row['sewageTax'];
  $tax = ($APV + ($APV * $temp / 100))/12;
                ?>
                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                                    
                               
                                 
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
  <td align="left" valign="top"><strong>STREET TAX  (पथकर कर)</strong></td>
    <?php
    $Qt = "Select streetTax from citytaxtable where Ulbid = '$Ulbid'";
    $resultQt = $conn->query($Qt);
    $row = mysqli_fetch_array($resultQt);
    $temp = $row['streetTax'];
    $tax = ($APV + ($APV * $temp / 100))/12;
    ?>
                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                              
                                    
                               
                                    
                                    
                                </tr>


                                <tr>
                                   
  <td align="left" valign="top"><strong>NMC</strong></td>
  <?php
   $Qt = "Select nmcEduTax from citytaxtable where Ulbid = '$Ulbid'";
   $resultQt = $conn->query($Qt);
   $row = mysqli_fetch_array($resultQt);
   $temp = $row['nmcEduTax'];
   $tax = ($APV + ($APV * $temp / 100))/12;
                ?>
                                    <td align="right" valign="top"><?php echo $temp;?></td>
                                    
                                   
                                    
                                    <td align="right" valign="top"><?php echo ceil($tax); ?></td>
                              
                                    
                               
                                    
                                    
                                </tr>
                                                     
                                                  <tr>
                                   
 	
                              <tr class="grand_total">
                                <td align="left" valign="top"><strong>Total </strong></td>
                                <td align="right" valign="top">0</td>
                               
                                <td align="right" valign="top"><?php echo ceil($total/12); ?></td>
                          
                            
                               
                              </tr>
                       


                            								<tr class="total_ex">
									<td colspan="8" align="right" valign="top"><strong>Total Excess Amount</strong></td><td align="right" valign="top">0</td>
								</tr>
								<tr class="total_out">
									<td colspan="8" align="right" valign="top"><strong>Total Net Outstanding</strong></td><td align="right" valign="top"><?php echo ceil($total/12); ?></td>
								</tr>
								                    
								<tr class="total_out">
									<td colspan="8" align="right" valign="top"><strong>Bill Date</strong></td>
									<td align="right" valign="top"></td> 
								</tr>
								<tr class="total_out">
									<td colspan="8" align="right" valign="top"><strong>Due Date</strong></td>
									<td align="right" valign="top"></td> 
								</tr>
																<tr class="total_out">                             
									<td colspan="8" align="right" valign="top">
																				    <strong>Amount On Due Date (Less 0% Rebate) </strong>
																			</td>
									<td align="right" valign="top">
									<?php echo ceil($total/12); ?></td>
								</tr>
								<tr class="total_out">                             
									<td colspan="8" align="right" valign="top"><strong>Amount After Due Date</strong></td>
									<td align="right" valign="top"><?php echo ceil($total/12); ?></td>
								</tr>
								<tr class="total_out">                             
									<td colspan="8" align="right" valign="top"><strong>Solar Rebate (-)</strong></td>
									<td align="right" valign="top">0</td>
								</tr>
								<tr class="total_out">                             
									<td colspan="8" align="right" valign="top"><strong>Online Payment Rebate (-)</strong></td>
									<td align="right" valign="top">
										0									</td>
								</tr>
								<tr class="total_out">
									<td colspan="8" align="right" valign="top"><strong>Total Pay</strong></td>
									<td align="right" valign="top">
                  <?php echo ceil($total/12); ?>									</td>
								</tr>
							</tbody></table>				
							<br>
								<div align="right">

                
    

									<form action='user_demandProceed.php?PropertyId=<?php echo $PropertyId; ?>&city=<?php echo $city; ?>&total=<?php echo $total;?>' name="frmpaynow" method="POST">
										<input type="hidden" id="indexid" value="">

                  
                        

                        <br>
                     
											
                        <a href='user_demandProceed.php' target="_blank" style="color: inherit;text-decoration: none;">
                          <button type="submit" class="btn btn-primary btn-lg btn-block" value="Pay Now">
                              <i class="fa fa-user"></i>                      
                              Pay the bills
                          </button>
                        </a>
											
									</form>

                  <br>
                  <a href="sms.php" target="_blank" style="color: inherit;text-decoration: none;">
                          <button  type="submit" class="btn btn-primary btn-lg btn-block" value="Pay Now">
                              <i class="fa fa-user"></i>                      
                              Send SMS
                          </button>
                  </a>




								</div>
														</fieldset>
											</div>
				</div>
				<div class="clear"></div>
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