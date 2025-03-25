<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>view receipt</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="http://www.urbanui.com/" />






</head>

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
                            <h5 style="display:inline" id="UsedID">*USerID</h5>
                          </div>
                          <div>
                            <h5 style="display:inline" id="UsedID">*Name of user</h5>
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
    <div id="table-content table-responsive">
				<br>
				<legend> Receipt of financial Year-2022-2023</legend>
			
                <table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered" >
			
					<thead>
                        <tr>
							<th valign="top">Sr. No.</th>
							<th valign="top">Financial Years</th>
							<th valign="top">Receipt No.</th>
							<th valign="top">Receipt Date</th>
							<th valign="top">Amount</th>
							<th valign="top">Rebate</th>
							<th valign="top">Solar Rebate</th>
							<th valign="top">Payment Mode</th>
							<th valign="top">Payment Status</th>
							<th valign="top">View Receipt</th>
						</tr>
					</thead>
					<tbody>
						 
 

<tr>

<td>1</td>

<td>2022-2023</td>

<td>NMCRCP09224</td>

<td>01/04/2022</td>

<td>3.00</td>

<td>0.00</td>

<td>0.00</td>

<td></td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP09224/fyear/2022-2023"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 					</tbody>
				</table>
									<br>
					<label>Receipt of financial Year-2021-2022 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
						
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>2</td>

<td>2021-2022</td>

<td>NMCRCP263796</td>

<td>14/02/2022</td>

<td>2440.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP263796/fyear/2021-2022"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
										<br>
					<label>Receipt of financial Year-2019-2020 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
					
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>3</td>

<td>2019-2020</td>

<td>NMCRCP45927</td>

<td>13/05/2019</td>

<td>1207.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP45927/fyear/2019-2020"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
										<br>
					<label>Receipt of financial Year-2018-2019 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
					
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>4</td>

<td>2018-2019</td>

<td>NMCRCP285708</td>

<td>11/01/2019</td>

<td>1325.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP285708/fyear/2018-2019"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
										<br>
					<label>Receipt of financial Year-2017-2018 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
						
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>5</td>

<td>2017-2018</td>

<td>NMCRCP184447</td>

<td>21/07/2017</td>

<td>874.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP184447/fyear/2017-2018"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
										<br>
					<label>Receipt of financial Year-2016-2017 </label>
    					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
    						
    						<thead>
    							<tr>
    								<th valign="top">Sr. No.</th>
    								<th valign="top">Financial Years</th>
    								<th valign="top">Receipt No.</th>
    								<th valign="top">Receipt Date</th>
    								<th valign="top">Amount</th>
    								<th valign="top">Rebate</th>
    								<th valign="top">Solar Rebate</th>
    								<th valign="top">Payment Mode</th>
    								<th valign="top">Payment Status</th>
    								<th valign="top">View Receipt</th>
    							</tr>
    						</thead>
    						<tbody>
    							 
 

<tr>

<td>6</td>

<td>2016-2017</td>

<td>NMCRCP117001</td>

<td>27/07/2016</td>

<td>874.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP117001/fyear/2016-2017"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

     						</tbody>
    					</table>
    									<br>
					<label>Receipt of financial Year-2015-2016 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
					
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>7</td>

<td>2015-2016</td>

<td>NMCRCP219387</td>

<td>29/09/2015</td>

<td>874.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP219387/fyear/2015-2016"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>	
										<br>
					<label>Receipt of financial Year-2014-2015 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
					
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>8</td>

<td>2014-2015</td>

<td>NMCRCP40252</td>

<td>21/07/2014</td>

<td>866.00</td>

<td>8.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP40252/fyear/2014-2015"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
					 <br>
					<label>Receipt of financial Year-2013-2014 </label>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="table table-bordered">
					
						<thead>
							<tr>
								<th valign="top">Sr. No.</th>
								<th valign="top">Financial Years</th>
								<th valign="top">Receipt No.</th>
								<th valign="top">Receipt Date</th>
								<th valign="top">Amount</th>
								<th valign="top">Rebate</th>
								<th valign="top">Solar Rebate</th>
								<th valign="top">Payment Mode</th>
								<th valign="top">Payment Status</th>
								<th valign="top">View Receipt</th>
							</tr>
						</thead>
						<tbody>
							 
 

<tr>

<td>9</td>

<td>2013-2014</td>

<td>NMCRCP113043</td>

<td>25/09/2013</td>

<td>874.00</td>

<td>0.00</td>

<td>0.00</td>

<td>Cash</td>

<td>Paid</td>

<td> 

<a href="/usrdashbord/viewreceipt/ids/NMCRCP113043/fyear/2013-2014"><img src="https://propertytax.nmctax.in/icons/search.png" alt="View Receipt"></a>



</td>

 </tr>

 

 						</tbody>
					</table>
					
	
			</div>
	<div>
		

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