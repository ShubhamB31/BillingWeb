<?php
include('../lib/conn.php');
if (isset($_POST['save']))
	{
		$supply_id = $_POST['supply_id'];
		$godown_id = $_POST['godown_id'];
		$product_id = $_POST['product_id'];
		$quantity = $_POST['quantity'];
		$id = $_POST['id'];
		
		
		$sql = "Update stock_details SET  supply_id = '".$supply_id."', godown_id = '".$godown_id."', product_id = '".$product_id."', quantity = '".$quantity."'  where id = $id";
		
		$data1 = mysql_query($sql);
		if($data1){
		//echo 'Data update';
		header('location:view_stock.php');
	}else{
		echo 'Data not update';
		}
	}
?>