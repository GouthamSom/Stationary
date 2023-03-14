<?php

$server ="localhost";
$username="root";
$password="";
$dbname="stationary_pgm";

$conn = new mysqli($server, $username, $password,$dbname);

// Check connection
if (!$conn) {
    echo "connected successfull";

}


  

?>