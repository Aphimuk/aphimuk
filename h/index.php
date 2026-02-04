<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อภิมุข แสงดอกไม้(แฟร้งค์)</title>
</head>

<body>

<h1> อภิมุข แสงดอกไม้(แฟร้งค์)</h1>

<form method="post" action="">
Username<input type="text" name="auser" autofocus required><br>
Password<input type="password" name="apwd" required><br>
<button type="submit" name="Summit">LOGIN</button>
</form>

<?php
if(isset($_POST['Summit'])){
	include_once("connectdb.php");
	$sql ="SELECT * FROM admin WHERE a_username ='{$_POST['auser']}' AND a_password ='{$_POST['apwd']}'LIMIT 1 ";
	$rs = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($rs);
	
	
	if($num == 1){
		
	}else{
		echo "<script>";
		echo"alert('Username หรือ Password ไม่ถูกต้อง')";
		echo"</script>";
	}
}
?>

</body>
</html>