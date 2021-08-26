<?php


$servername = "localhost";
$dBusername = "root";
$dBPassword = "";
$dBname = "intro";

$conn = mysqli_connect($servername, $dBusername, $dBPassword, $dBname);

if (!$conn) {
    die('connection has failed' . mysqli_connect_error());
}