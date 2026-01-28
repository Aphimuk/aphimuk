<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>aphimuk </title>
</head>

<body>

<h1>อภิมุข แสงดอกไม้(แฟร้งค์)</h1>
<table border="1">
<tr>
      <th>ประเทศ</th>
      <th>ยอดขาย</th>
</tr>
<?php
include_once("connectdb.php");
$sql = "SELECT `p_country`,SUM(`p_amount`)AS totel FROM `popsupermarket` GROUP BY`p_country`";
$rs = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($rs)){

?>
<tr>
      <td><?php echo $data['p_country'];?></td>
      <td align="right"><?php echo $data['totel'];?></td>
      

</tr>
<?php
}
mysqli_close($conn);
?>

</body>
</html>