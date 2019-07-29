<?php
include('../lib/conn.php');
if(isset($_GET['user_id']))
{
	$id = $_GET['user_id'];
	$list = "DELETE FROM billing_godown WHERE user_id = $id";

	if(mysql_query($list))
	{
		//echo "Record was deleted successfully";
		header('location:view_godown.php');

	}else{
		echo "ERROR : COULD NOT ABLE TO EXECUTE.";
	}
}
?>