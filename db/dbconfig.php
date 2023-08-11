<?php

$conn = new mysqli('localhost','root','','ecafe');

if($conn->connect_error)
{
    die("Connection failed: ".mysqli_connect_error());
}

?>