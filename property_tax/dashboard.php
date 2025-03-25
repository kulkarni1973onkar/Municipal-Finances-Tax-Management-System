<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="http://www.urbanui.com/" />

</head>
<body>


    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password="";
    $dbname="tax";

    $conn = new mysqli($servername, $username, $password, $dbname);

    session_start();
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location: login.php");
        exit;
    }
    
    echo "welcome";
    echo "<br>";
    echo $_SESSION['id'];
    $idStored = $_SESSION['id'];    
    

    $queryState = "Select state from all_admins where id='$idStored'";     

    $result1 = $conn->query($queryState);
    $row = mysqli_fetch_array($result1);


    $StateStored = $row['state'];   
 

 
    

        $query2 = "Select * FROM main_table where state= '$StateStored'";
        $result = $conn->query($query2);

        if($result -> num_rows > 0){
            echo "<br>";
            echo "<tr>";
            echo "<th><b>Name</b></th>";
            echo "<th><b>&nbsp;&nbsp;&nbsp;&nbsp;ID</b></th>";
            echo "<th><b>&nbsp;&nbsp;&nbsp;state</b></th>";
            echo "<th><b>&nbsp;&nbsp;&nbsp;&nbsp;district</b></th>";
            echo "<th><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tax Paid</b></th>";
            echo "</tr>";
            while ($dbValues = $result->fetch_assoc()){
                echo "<br>";
            

                echo "<tr align=center";
                echo "<td>&nbsp;" .$dbValues['name']. "</td>";
                echo "<td>&nbsp;&nbsp;" .$dbValues['id']. "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp;&nbsp" .$dbValues['state']. "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp&nbsp;&nbsp" .$dbValues['district']. "</td>";
                echo "<td>&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp" .$dbValues['tax_paid']. "</td>";
                echo "</tr>";
            } 
        }


    ?>

<div class="row">
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic Table</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col1">Name</th>
                          <th scope="col1">ID</th>
                          <th scope="col1">State</th>
                          <th scope="col1">District</th>
                          <th scope="col1">Tax Paid</th>
                        </tr>
                      </thead>

                      <tbody>
                            <?php 
                            $servername = "localhost:3307";
                            $username = "root";
                            $password="";
                            $dbname="tax";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                       
                    
                            if (!$conn){
                                die("Connection failed" .mysqli_error());
                            }


                            $query="select * from main_table";
                            $result=mysqli_query($conn,$query);
                            
                            
                            ?>
                            <?php if ($result->num_rows > 0): ?>
                            <?php while($array=mysqli_fetch_row($result)): ?>
                            <tr>
                                <th scope="row"><?php echo $array[0];?></th>
                                <td><?php echo $array[1];?></td>
                                <td><?php echo $array[3];?></td>
                                <td><?php echo $array[4];?></td>
                                <td><?php echo $array[5];?></td>
                            </tr>
                            <?php endwhile; ?>
                            <?php else: ?>
                            <tr>
                            <td colspan="3" rowspan="1" headers="">No Data Found</td>
                            </tr>
                            <?php endif; ?>
                            <?php mysqli_free_result($result); ?>
                        </tbody>
                    </table>
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
  <script src="../../js/owl-carousel.js"></script>

   
</body>
</html>