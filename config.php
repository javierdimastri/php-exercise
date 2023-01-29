<?php
$host = "localhost:8889";
$dbusername = "root";
$dbpassword = "root";
$database_name = "tesdb";

try{
    $db = mysqli_connect($host, $dbusername, $dbpassword, $database_name);
 } catch(Exception $error){
    die("Connection failed: " . $error->getMessage());
}
?>