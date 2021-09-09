<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['Name']) && isset($_POST['Password'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['Name'];
	$p = $_POST['Password'];
	$sql = "SELECT * FROM admininfo WHERE Name = '$u' AND Password = '$p'";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result)!=0 ){
	
		//echo "ADMIN Login Successful ";
		header('Location: admin_portal.php');
	}
	else{
		echo "You are not registered as an admin";
		//header("Location: index.php");
	}
	
}


?>