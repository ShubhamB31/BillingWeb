<?php
include('../lib/conn.php');
if (isset($_GET['id']))
	{
		$id = $_GET['id'];
		$list = "DELETE FROM supply_details WHERE id='$id'";
		

if(mysql_query($list)){

	header('location:view_supply.php');
} else{
    echo "ERROR: Could not able to execute.";
}
}
?>