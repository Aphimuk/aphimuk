<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อภิมุข แสงดอกไม้</title>
</head>

<h1> งานi-- อภิมุข แสงดอกไม้(แฟร้งค์) <h1>



<table border="1">
    <tr>
        <th>รหัสภาค</th>
        <th>ชื่อภาค</th>
        <th>ลบ</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM 'regions'";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)){
?>
    <tr>
        <td><?php echo $data['r_id'] ; ?></td> 
        <td><?php echo $data['r_name'] ; ?></td> 
        <td width="80" align

    </tr>

<?php } ?>
</table>   

<?php
mysqli_close($conn);
?>

<body>
</body>
</html>
