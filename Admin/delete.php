<?php
include('../lib/conn.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$list = "DELETE FROM billing_shop WHERE id = $id";

	if(mysql_query($list))
	{
		//echo "Record was deleted successfully";
		header('location:view_shop.php');

	}else{
		echo "ERROR : COULD NOT ABLE TO EXECUTE.";
	}
}
?>