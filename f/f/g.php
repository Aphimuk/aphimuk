<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อภิมุข แสงดอกไม้(แฟร้งค์)</title>
</head>

<body>
<h1>อภิมุข แสงดอกไม้(แฟร้งค์)-โปรแกรมสูตรคูณ</h1>

<form method="post" action="">
    แม่สูตร<input type="number" min="2" max="100" name="a" autofocus required>
    <button type="submit" name="Submit">OK</button>
 </form>
 <hr>

<?php
if(isset($_POST['Submit'])){
	$b = $_POST['a'];
	for ($a=1; $a<=12; $a++) {
		$c = $a*$b ;
		echo "{$b}x{$a} = {$c} <br >" ;
		}
}
?>

</body>
</html>