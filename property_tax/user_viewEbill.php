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

    <style>
        .container {
        position: relative;
        text-align: center;
  
        }

        .text1 {
        position: absolute;
        }


    </style>
    <div class="col-md-7 grid-margin ">
            <div class="container">
                <img src="images/ebill_front.jpg"  style="width:100%;height:100%;">
                <div class="text1" style="top: 8px;left: 16px;">Top Left</div>
                <div class="clsData ">
					<div class="clsBlock" style="top:2px; left: 0px;">
						<div class="text1" style="top: 35px; left: 145px; width: 131px; height: 20px;">804-A</div>
						<div class="text1" style="top: 32px; right:40px; width: 70px; height: 70px;">
														<img src="https://chart.googleapis.com/chart?chs=70x70&amp;cht=qr&amp;chl=https://propertytax.nmctax.in//default/login/index/id/c21zXzgwNDAxMDU5.'&amp;choe=UTF-8&amp;chld=L|0" alt="QRCODE">
						</div>
					</div>
					<div id="clsPersonalInfo" class="clsBlock">
						<div class="text1" style="top: 112px; left: 157px; width: 100px; height: 20px;">NASIK EAST</div>
						<div class="text1" style="top: 111px; left: 370px; width: 73px;">80401059</div>
						<div class="text1" style="top: 111px; left: 530px; width: 82px;">E-BILL</div>
						<div class="text1" style="top: 111px; left: 700px; width: 117px;">0004245</div>
						<div class="text1" style="top: 131px; left: 50px; width: 398px;">
							JOSHI SANJAY ARUN						</div>
						<div class="text1" style="top: 142px; left: 10px; width: 628px;font-size: 11px;">
													</div>
						<div class="text1" style="top: 131px; left: 592px; width: 152px;">804/0804/003//</div>
						<div class="text1" style="top: 200px; left: 30px; width: 677px;">
							<div class="clsTdCell" style="height: 29px;line-height: 14px;">
								NEAR DATT MANDIR GORE RAM LEAN NASHIK							</div>
						</div>
					</div>
					<div id="clsPropertyInfo">
						<div class="text1" style="top: 228px; left: 164px; width: 87px;"><div class="clsTdCell" style="height: 28px;">1858</div></div>
						<div class="text1" style="top: 228px; left: 254px; width: 102px;"><div class="clsTdCell" style="height: 28px;"></div></div>
						<div class="text1" style="top: 228px; left: 359px; width: 98px;"><div class="clsTdCell" style="height: 28px;">1858</div></div>
						<div class="text1" style="top: 228px; left: 460px; width: 128px;"><div class="clsTdCell" style="height: 28px;">/</div></div>
						<div class="text1" style="top: 228px; left: 592px; width: 151px;"><div class="clsTdCell" style="height: 28px;"></div></div>
					</div>
					<div id="clsTaxDistribution" class="clsAbsolute" style="top:294px; left: 398px;">
						 						
									<div class="text1" style="top:330px; left:480px; ">
										<div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">A</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">279</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">278</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">557</div></div>
									</div>
									 						
									<div class="text1" style="top:350px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
									<div class="text1" style="top:375px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>

									<div class="text1" style="top:400px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
									<div class="text1" style="top:430px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
                                    <div class="text1" style="top:460px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
                                    <div class="text1" style="top:485px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
                                    <div class="text1" style="top:510px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
							        <div class="text1" style="top:540px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
														
                                    <div class="text1" style="top:565px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
                                    <div class="text1" style="top:590px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 						
                                    <div class="text1" style="top:615px; left:480px; ">
                                        <div  style="top: 0px; left: 0px; width: 53px;"><div class="text1" style="height: 22px;">2</div></div>
										<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 22px;">19</div></div>
										<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 22px;">18</div></div>
										<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 22px;">37</div></div>
									</div>
									 		
															
						<div class="text1" style="top:645px; left:480px;">
							<div class="text1" style="top: 0px; left: 0px; width: 53px;"><div class="clsTdCell" style="height: 27px;">&nbsp;</div></div>
							<div class="text1" style="top: 0px; left: 55px; width: 103px;"><div class="clsTdCell" style="height: 27px;">606</div></div>
							<div class="text1" style="top: 0px; left: 161px; width: 91px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 254px; width: 89px;"><div class="clsTdCell" style="height: 27px;">1207</div></div>
						</div>
					</div>
										<div class="text1" style="top:705px; left:480px; width: 131px;">
						<div class="text1" style="top: 0px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 22px;">57</div></div>
						<div class="text1" style="top: 24px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 22px;">34</div></div>
						<div class="text1" style="top: 46px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 22px;">23</div></div>
						<div class="text1" style="top: 68px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 32px;">57</div></div>
					</div>	
					<div class="text1" style="top:700px; left:750px; width: 75px;">
						<div class="text1" style="top: 1px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 20px;">0</div></div>
						<div class="text1" style="top: 21px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 21px;">1230</div></div>
						<div class="text1" style="top: 42px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 21px;">1230</div></div>
						<div class="text1" style="top: 63px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 21px;">3</div></div>
						<div class="text1" style="top: 84px; left: 0px; width: 100%;"><div class="clsTdCell" style="height: 21px;">1227</div></div>
					</div>	
					<div class="text1" style="top:830px; left:80px; ">
												<div class="text1" style="top:38px; left:53px; ">
							<div class="text1" style="top: 0px; left: 10px; width: 50px;"><div class="clsTdCell" style="height: 27px;">0</div></div>
							<div class="text1" style="top: 0px; left: 63px; width: 50px;"><div class="clsTdCell" style="height: 27px;">0</div></div>
							<div class="text1" style="top: 0px; left: 116px; width: 50px;"><div class="clsTdCell" style="height: 27px;">0</div></div>
							<div class="text1" style="top: 0px; left: 169px; width: 50px;"><div class="clsTdCell" style="height: 27px;">12</div></div>
							<div class="text1" style="top: 0px; left: 221px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 274px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 327px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 379px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 433px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 485px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 538px; width: 52px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
							<div class="text1" style="top: 0px; left: 591px; width: 43px;"><div class="clsTdCell" style="height: 27px;">35</div></div>
						</div>	
						<div class="text1" style="top:67px; left:53px; ">
							<div class="text1" style="top: 0px; left: 10px; width: 51px;"><div class="clsTdCell" style="height: 27px;">606</div></div>
							<div class="text1" style="top: 0px; left: 62px; width: 52px;"><div class="clsTdCell" style="height: 27px;">606</div></div>
							<div class="text1" style="top: 0px; left: 115px; width: 52px;"><div class="clsTdCell" style="height: 27px;">606</div></div>
							<div class="text1" style="top: 0px; left: 168px; width: 52px;"><div class="clsTdCell" style="height: 27px;">618</div></div>
							<div class="text1" style="top: 0px; left: 221px; width: 52px;"><div class="clsTdCell" style="height: 27px;">629</div></div>
							<div class="text1" style="top: 0px; left: 274px; width: 52px;"><div class="clsTdCell" style="height: 27px;">641</div></div>
							<div class="text1" style="top: 0px; left: 326px; width: 52px;"><div class="clsTdCell" style="height: 27px;">654</div></div>
							<div class="text1" style="top: 0px; left: 380px; width: 52px;"><div class="clsTdCell" style="height: 27px;">666</div></div>
							<div class="text1" style="top: 0px; left: 433px; width: 52px;"><div class="clsTdCell" style="height: 27px;">679</div></div>
							<div class="text1" style="top: 0px; left: 485px; width: 52px;"><div class="clsTdCell" style="height: 27px;">692</div></div>
							<div class="text1" style="top: 0px; left: 539px; width: 52px;"><div class="clsTdCell" style="height: 27px;">705</div></div>
							<div class="text1" style="top: 0px; left: 591px; width: 43px;"><div class="clsTdCell" style="height: 27px;">719</div></div>
						</div>	
						<div class="text1" style="top:98px; left:53px; ">
							<div class="text1" style="top: 0px; left: 10px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 62px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 115px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 168px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 221px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 274px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 326px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 380px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 433px; width: 52px;"><div class="clsTdCell" style="height: 27px;">601</div></div>
							<div class="text1" style="top: 0px; left: 485px; width: 52px;"><div class="clsTdCell" style="height: 27px;">624</div></div>
							<div class="text1" style="top: 0px; left: 539px; width: 52px;"><div class="clsTdCell" style="height: 27px;">636</div></div>
							<div class="text1" style="top: 0px; left: 591px; width: 43px;"><div class="clsTdCell" style="height: 27px;">647</div></div>
						</div>
						<div class="text1" style="top:140px; left:53px; ">
							<div class="text1" style="top: 0px; left: 10px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1207</div></div>
							<div class="text1" style="top: 0px; left: 62px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1207</div></div>
							<div class="text1" style="top: 0px; left: 115px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1207</div></div>
							<div class="text1" style="top: 0px; left: 168px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1231</div></div>
							<div class="text1" style="top: 0px; left: 221px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1265</div></div>
							<div class="text1" style="top: 0px; left: 274px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1277</div></div>
							<div class="text1" style="top: 0px; left: 326px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1290</div></div>
							<div class="text1" style="top: 0px; left: 380px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1302</div></div>
							<div class="text1" style="top: 0px; left: 433px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1315</div></div>
							<div class="text1" style="top: 0px; left: 485px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1351</div></div>
							<div class="text1" style="top: 0px; left: 539px; width: 52px;"><div class="clsTdCell" style="height: 27px;">1376</div></div>
							<div class="text1" style="top: 0px; left: 591px; width: 43px;"><div class="clsTdCell" style="height: 27px;">1401</div></div>
						</div>
					</div>	
					<div id="text1" class="text1" style="bottom: 0px; right: 0px; ">
						<div class="clsTdCell" style="height: 50px;">
							<img src="https://propertytax.nmctax.in//upload/sign/DO-East.png" style="width:auto; height:50px;vertical-align: middle;">
						</div>	
					</div>
					<div class="clsAbsolute" style="top:918px; left:22px; border-bottom: 2px solid #7bc2dd;width: 716px;">&nbsp;</div>
				</div>
            </div>
    </div>
  


</div>







            

            

            
                






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