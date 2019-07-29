<?php
include('../lib/conn.php');
if (isset($_POST['submit']))
	{
		$shop_code=$_POST['shop_code'];
		$name=$_POST['name'];
		$gst_no=$_POST['gst_no'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$post_code=$_POST['post_code'];
		$country=$_POST['country'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user_id=$_POST['user_id'];
		$id=$_POST['id'];
		
		$sql1 = "Update auth_user SET username = '".$username."',password = '".$password."' where id = '$user_id'";
		
		$sql = "Update billing_shop SET shop_code = '".$shop_code."', name = '".$name."',gst_no = '".$gst_no."', address = '".$address."', city = '".$city."', post_code = '".$post_code."', country = '".$country."' where id = '$id'";
		$data1 = mysql_query($sql);
		$data2 = mysql_query($sql1);
		if($data1 && $data2){
		//echo 'Data update';
		header('location:view_shop.php');
	}else{
		echo 'Data not update';
		}
	}
?>