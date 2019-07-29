<?php
include('../lib/conn.php');
if (isset($_POST['save']))
	{
		$pro_code=$_POST['pro_code'];
		$name=$_POST['name'];
		$pro_sell=$_POST['pro_sell'];
		$pro_pur=$_POST['pro_pur'];
		$pro_des=$_POST['pro_des'];
		$id=$_POST['id'];
		
		
		$sql = "Update product_details SET pro_code = '".$pro_code."', name = '".$name."',pro_sell = '".$pro_sell."', pro_pur = '".$pro_pur."',pro_des = '".$pro_des."' where id = $id";
		
		$data1 = mysql_query($sql);
		if($data1){
		//echo 'Data update';
		header('location:view_products.php');
	}else{
		echo 'Data not update';
		}
	}
?>