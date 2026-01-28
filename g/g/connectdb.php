<?php
		$host = "localhost";
		$user = "root";
		$pwd = "$mB#loPWzL3h";
		$db = "4024db";
		$conn = mysqli_connect($host, $user, $pwd, $db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
		mysqli_query($conn, "SET NAMES utf8");
?>
