<?php
$server="localhost";
$user="admin";
$passwd="@dminadm1n";
$db="crud";

$mysqli = mysqli_connect($server,$user,$passwd,$db);

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
} 
