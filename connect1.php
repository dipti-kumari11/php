<?php
//* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user &#39;root&#39; with no password) */
$link = mysqli_connect("localhost", "root", "","it_info");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
   echo "Database created successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>