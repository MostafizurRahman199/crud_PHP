<?php

$username = "root";
$password = "";
$serverName = "localhost";
$databaseName = "crudmostafiz";

$con = mysqli_connect($serverName, $username, $password,$databaseName);


    if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "No connection";
        die("No connection" . mysqli_connect_error());
    }



?>