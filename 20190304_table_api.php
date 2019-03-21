<?php
	require_once("../dbtools.inc.php");

	$link=create_connection();

	$sql= "SELECT * FROM region";

	$result= excute_sql($link, "demoDB", $sql);

	$row=mysqli_fetch_assoc($result);
	$chartData=array();
	do{
		$chartData[]=$row;
	}while($row=mysqli_fetch_assoc($result));

	echo json_encode($chartData);
?>