<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="merodata";
// checking connection
$con=mysqli_connect($hostname,$username,$password,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}