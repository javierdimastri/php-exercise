<?php

include("config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];

    
    $sql = "DELETE FROM account WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-person.php');
    } else {
        die("delete failed...");
    }

} else {
    die("access denied...");
}

?>