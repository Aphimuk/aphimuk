<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "4024db";
$conn = mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อต่อล้มเหลว");
mysqli_query($conn, "SET NAMES utf8");
?>