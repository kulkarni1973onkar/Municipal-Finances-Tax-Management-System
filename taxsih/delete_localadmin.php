<?php
//print_r($_POST); 
include "db.php";
if(isset($_POST))
{
     extract($_POST);

     $sql = "DELETE FROM `districtadmin` WHERE ulb_id = '$ulb_id'";
//echo $sql;
 $res =  mysqli_query($con,$sql);
 if($res)
  {
      echo "1";
  }
  
  
}

?>
