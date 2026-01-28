<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aphimuk </title>
</head>

<body>

<h1>อภิมุข แสงดอกไม้(แฟร้งค์)</h1>

<form method="post" action="">
   คำค้น<input type="text" name="a" autofocus>
   <button type="submit" name="Submit">OK</button>
 </form>
<hr>


<table border="1">
<tr>
      <th>Order ID</th>
      <th>ชื่อสินค้า</th>
      <th>ประเภทสินค้า</th>
      <th>วันที่</th>
      <th>ประเทศ</th>
      <th>จำนวนเงิน</th>
      <th>รูปภาพ</th>
</tr>
<?php
include_once("connectdb.php");
@$kw = $_POST['a'];
$sql = "SELECT * FROM `popsupermarket` WHERE p_order_id LIKE '{$kw}' OR p_product_name LIKE '%{$kw}%' OR p_category LIKE '%{$kw}%'  OR p_country LIKE '%{$kw}%'  ";
$rs = mysqli_query($conn, $sql);
$totel = 0 ;
while ($data = mysqli_fetch_array($rs)){
	$totel +=$data['p_amount'];

?>
<tr>
      <td><?php echo $data['p_order_id'];?></td>
      <td><?php echo $data['p_product_name'];?></td>
      <td><?php echo $data['p_category'];?></td>
      <td><?php echo $data['p_date'];?></td>
      <td><?php echo $data['p_country'];?></td>
      <td align="right"><?php echo number_format($data['p_amount'],0);?></td>
      <td><img src="images/<?php echo $data['p_product_name']; ?>.jpg " width="55" ></td>

</tr>
<?php
}
?>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><strong><?php echo number_format ($totel,0);?></td>
    <td>&nbsp;</td>
 

<?php
mysqli_close($conn);
?>

</body>
</html>