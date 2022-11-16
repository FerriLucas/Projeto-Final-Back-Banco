<?php
$server = "192.168.28.34";
$database = "projeto";
$username = "devweb";
$password = "suporte@22";
// Create connection
$con = new mysqli($server, $username, $password, $database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected successfully";
}
?>