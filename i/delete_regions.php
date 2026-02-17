<meta charset="utf-8">
<?php
include_once("connectdb.php");
$id = $GET[Id];

$sql = "DELETE FROM regions WHERE r_id='{$id}'";
mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้")

echo "<scipt>";
echo "windoe.location='a.php'";
echo "</scipt>";

?>

