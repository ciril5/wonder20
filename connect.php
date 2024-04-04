<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "wonderspot";

// create connection

$conn = new mysqli($servername,$username,$password,$dbname);

// connect check

if ($conn->connect_error){
    die("");
}else{
    echo "";
}

?>