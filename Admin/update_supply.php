<?php
include('../lib/conn.php');
if (isset($_POST['save']))
	{
		$com_name=$_POST['com_name'];
		$gst_no=$_POST['gst_no'];
		$mob_no=$_POST['mob_no'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$post_code=$_POST['post_code'];
		$id=$_POST['id'];
		
		
		$sql = "Update supply_details SET com_name = '".$com_name."', gst_no = '".$gst_no."',mob_no = '".$mob_no."', address = '".$address."',city = '".$city."', post_code='".$post_code."' where id = $id";
		
		$data1 = mysql_query($sql);
		if($data1){
		//echo 'Data update';
		header('location:view_supply.php');
	}else{
		echo 'Data not update';
		}
	}
?>