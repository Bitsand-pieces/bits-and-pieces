<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db =  "BitsAndPieces";
$conn = new mysqli($hostname,$username,$password,$db);
if($conn->connect_error){
die("connection error".$conn->connect_error);
header('location: 404.html');
}
session_start();
error_reporting('1');