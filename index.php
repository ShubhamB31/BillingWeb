<?php
include('lib/conn.php');
if(isset($_SESSION['auth']))
{
	if($_SESSION['auth']['level']==0)
	{
		header('location:Admin/');
	}
	if($_SESSION['auth']['level']==1)
	{
		header('location:Shop/');
	}
	if($_SESSION['auth']['level']==2)
	{
		header('location:Godown/');
	}
}
else
{
	if(isset($_POST['submit']))
	{
		//print_r($_POST);
		if(empty($_POST['usr']))
		{
			echo 'username required';
		}
		if(empty($_POST['pwd']))
		{
			echo 'password required';
		}
		if(!empty($_POST['usr']) && !empty($_POST['pwd']))
		{
			$sql = mysql_query("select * from auth_user where username='".$_POST['usr']."' and password='".$_POST['pwd']."' and status=1");

			$num = mysql_num_rows($sql);
			if($num == 1)
			{
				$list = mysql_fetch_array($sql);
				$auth = array('id'=>$list['id'],
						'username'=>$list['username'],
						'level'=>$list['level']);
				$_SESSION['AUTH'] = $auth;
				if(isset($_SESSION['AUTH']))
				{
					header('location:Admin/');
				}
			}
			else
			{
				echo 'Data not found';
			}
		}
	}
}
?>
<html>
<title>MY WEBSITE</title>
<?php include('Admin/billpages/head.php');?>
<head>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    

<div class="limiter">
		<div class="col-sm-12">

			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
				<div class="login-panel panel panel-default">
				  <h2>LOGIN</h2>
				  <form class="form-horizontal" action="index.php" method="post">
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="usr">Username:</label>
				      <div class="col-sm-10">
				        <input type="text" class="form-control" id="username" placeholder="Enter username" name="usr">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="pwd">Password:</label>
				      <div class="col-sm-10">          
				        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <div class="checkbox">
				          <label><input type="checkbox" name="remember"> Remember me</label>
				        </div>
				      </div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <input type="submit" class="btn btn-default" name="submit">
				      </div>
				    </div>
				  </form>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
</div>

<style>
body {
  background: #f1f4f7;
  padding-top: 60px;
  font-size: 14px;
  color: #444444;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif; }
</style>

</body>
</html>