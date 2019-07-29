<?php 
include('../lib/conn.php');
if(isset($_POST['save']))
{
	if(empty($_POST['com_name']))
	{
		echo '</br>Company name is required';
	}
	if(empty($_POST['gst_no']))
	{
		echo '</br>GST No is required';
	}
	if(empty($_POST['mob_no']))
	{
		echo '</br>Mobile No is required';
	}
	if(empty($_POST['address']))
	{
		echo '</br> Address is required';
	}
	if(empty($_POST['post_code']))
	{
		echo '</br>Post Code is required';
	}
	if(!empty($_POST['com_name']))
	{
		mysql_query("insert into supply_details(com_name,gst_no,mob_no,address,city,post_code)
						values('".$_POST['com_name']."','".$_POST['gst_no']."','".$_POST['mob_no']."','".$_POST['address']."','".$_POST['city']."','".$_POST['post_code']."')");
	}
}
?>
<html>
<?php include('billpages/head.php');?>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Shubham's Footwear Shop</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="view_shop.php">Shops</a></li>
          <li><a href="view_godown.php">Godowns</a></li>
          <li><a href="view_expense.php">Expense</a></li>
          <li><a href="view_products.php">Products</a></li>
          <li><a href="view_supply.php">Suppliers</a></li>
          <li><a href="stock_main.php">Stock</a></li>
          <li><a href="#">Sales</a></li>
          <li><a href="#">Reports</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ADMIN<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Setting</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>   

<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>SUPPLIER DETAILS</h2>
			</div> 
			<br />
				<div class="card-body card-block">
				<form  action="add_supply.php" method="POST">
							<div class="form-group">
								<label for="com" class=" form-control-label">Company Name</label>
									<input type="text" id="com_name" name="com_name" placeholder="Enter company name code" class="form-control">
							</div>
						
							<div class="form-group">
								<label for="gstno" class=" form-control-label">GST No.</label>
									<input type="text" id="gst_no" name="gst_no" placeholder="Enter GSt No." class="form-control">
							</div>
							<div class="form-group">
								<label for="mob" class=" form-control-label">Mobile No.</label>
									<input type="text" name="mob_no"  placeholder="Enter mobile no." id="mob_no" class="form-control">
							</div>
							<div class="form-group">
								<label for="address" class=" form-control-label">Address</label>
									<input type="textarea" name="address" placeholder="Enter address." id="address" class="form-control">
							</div>
							<div class="form-group">
								<label for="city" class=" form-control-label">city</label>
									<input type="text" name="city"  placeholder="Enter city" id="city" class="form-control">
							</div>
							<div class="form-group">
								<label for="post" class=" form-control-label">Post Code</label>
									<input type="text" name="post_code"  placeholder="Enter post code" id="post_code" class="form-control">
							</div>
					<div class="container-fluid">
						<button type="save" class="btn btn-primary" name="save">Submit</button>
					</div>
		</div>
				</div>
				</form>
			
	</div>
</div>

</body>
</html>