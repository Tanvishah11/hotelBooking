<?php
session_start();
$dbServername= "localhost";
$dbUsername= "user";
$dbPassword= "tanvi";
$dbName= "hotels";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Connection failed");
?>