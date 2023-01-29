<?php

include("config.php");

if(isset($_POST['register'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $sql = "INSERT INTO persons (FirstName, LastName, Address, City) VALUE ('$firstName', '$lastName', '$address', '$city')";

    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>