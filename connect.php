
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
//server with default setting (user &#39;root&#39; with no password) */
$link = mysqli_connect("localhost", "root", "", "project1");
// Check connection
if($link === false){
die("ERROR: Could not connect.". mysqli_connect_error());
}
// Attempt create table query execution
$sql = "CREATE TABLE users(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE,
email VARCHAR(70) NOT NULL UNIQUE AND STRONG
)";

// Attempt insert query execution
$sql = "INSERT INTO users(username, email, password) VALUES
('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($link, $sql)){
   echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>