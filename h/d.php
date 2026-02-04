<?php
  session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อภิมุข แสงดอกไม้(แฟร้งค์)</title>
</head>

<body>

<h1> อภิมุข แสงดอกไม้(แฟร้งค์)</h1>
<?php
    echo @$_SESSION['name'] = "<br>";
    echo @$_SESSION['nickname'] = "<br>";
    echo @$_SESSION['p1'] = "<br>";
    echo @$_SESSION['p2'] = "<br>";

?>

</body>
</html>