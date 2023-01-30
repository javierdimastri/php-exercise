<?php

include("config.php");


if(isset($_POST['save'])){
	
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
	

	$sql = "UPDATE account SET firstName='$firstName', lastName='$lastName', address='$address', city='$city' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	

	if( $query ) {
		header('Location: list-person.php');
	} else {
        echo "failed";
		die("Failed change...");
	}
	
	
} else {
	die("Acess Denied...");
}

?>