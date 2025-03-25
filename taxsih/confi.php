
<?php

	$con=mysqli_connect("localhost:3307","root","","ptm")or die(mysqli_error());



	if(mysqli_connect_errno())
	{
		echo mysqli_connect_errno();
	}

?>
