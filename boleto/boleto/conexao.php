<?php 
$servername = "localhost";
$database = "gnvendas";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
else{
    
}

?>