<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Payment</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="http://www.urbanui.com/" />


</head>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email1 = $_POST['email1'];
    echo $email1;
         

    // $email_to="kasturiwagh15@gmail.com";
    // $email_subject = " CHECKING CHECKING 1";
    // $email_from = 'kasturiwagh15@gmail.com';
    // $email_message = "Following user has logged in to the system at ";

    // $headers = 'From: '.$email_from."\r\n".
    //         'Reply-To: '.$email_from."\r\n" .
    //         'X-Mailer: PHP/' . phpversion();
    //         @mail($email_to, $email_subject, $email_message, $headers);

  
 
          
 
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    
    // send email
    if(!mail("kasturiwagh9@gmail.com","My subject",$msg)){
        echo "fail";
    }

    

}

            
    






?>



<body>



<div class="row">
  <div class="col-md-6 grid-margin stretch-card my-2 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Payment</h4>
                        <form action="paymentGateway.php" class="form" method="POST">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder="Card number">
                                                    <label for="" class="form__label">Card Number</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">MM / yy</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="password" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">cvv code</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">name on the card</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="email" class="form-control" placeholder="email" name="email1">
                                                    <label for="" class="form__label">Enter the email  </label>
                                                </div>
                                            </div>



                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </div>
                                        </div>
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
  <script src="../../js/owl-carousel.js"></script>
    
</body>



</html>