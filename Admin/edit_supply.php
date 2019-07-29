<?php
include('../lib/conn.php');
if (isset($_GET['id']))
{
	$id1 = $_GET['id'];
	$list = "select * from supply_details where id = $id1";
	$data = mysql_query($list);
	$_POST = mysql_fetch_array($data);
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
				<h2>UPDATE PRODUCTS</h2>
			</div> 
			<br />
			<div class="card-body card-block">
				<form  action="update_supply.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $_POST['id'];?>"/>
							<div class="form-group">
								<label for="com" class=" form-control-label">Company Name</label>
									<input type="text" id="com_name" name="com_name" value="<?php echo $_POST['com_name'];?>" class="form-control">
							</div>
						
							<div class="form-group">
								<label for="gstno" class=" form-control-label">GST No.</label>
									<input type="text" id="gst_no" name="gst_no" value="<?php echo $_POST['gst_no'];?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="mob" class=" form-control-label">Mobile No.</label>
									<input type="text" name="mob_no"  value="<?php echo $_POST['mob_no'];?>" id="mob_no" class="form-control">
							</div>
							<div class="form-group">
								<label for="address" class=" form-control-label">Address</label>
									<input type="textarea" name="address" value="<?php echo $_POST['address'];?>" id="address" class="form-control">
							</div>
							<div class="form-group">
								<label for="city" class=" form-control-label">city</label>
									<input type="text" name="city" value="<?php echo $_POST['city'];?>" id="city" class="form-control">
							</div>
							<div class="form-group">
								<label for="post" class=" form-control-label">Post Code</label>
									<input type="text" name="post_code" value="<?php echo $_POST['post_code'];?>" id="post_code" class="form-control">
							</div>
					<div class="container-fluid">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="save" class="btn btn-primary" name="save">Update</button>
					</div>
		</div>
					</div>	
				</form>	
	</div>
</div>
</body>
</html>
