<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "vehicle_managements";

//CONNECTION WITH THE DATABASE
$connection = new mysqli($host, $user, $password, $database);

//check connection if it is working
if($connection -> connect_error){
    die("Connection FAILED");
}

?>