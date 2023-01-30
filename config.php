<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$database_name = "user";

try{
    $db = mysqli_connect($host, $dbusername, $dbpassword, $database_name);
 } catch(Exception $error){
    die("Connection failed: " . $error->getMessage());
}
?>