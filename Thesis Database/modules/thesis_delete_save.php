<?php
$isallok = true;
$msg = "";

if($isallok){
	include("db_connect.php");
	$query = "SELECT * FROM thesis WHERE id = '".mysqli_real_escape_string($connector, $_POST['txtid'])."'";
	$result = mysqli_query($connector, $query);
	$row = mysqli_fetch_array($result);
	unlink("../uploads/".$row['id'].".pdf");
	
	$query = "DELETE FROM thesis WHERE id = '".mysqli_real_escape_string($connector, $_POST['txtid'])."'";
	$result = mysqli_query($connector, $query);
	
	echo "success";
} else {
	echo $msg;
}
?>