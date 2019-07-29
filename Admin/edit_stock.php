<?php
include('../lib/conn.php');
if (isset($_GET['id']))
{
	$id1 = $_GET['id'];
	$list = "select * from stock_details where id = $id1";
	$data = mysql_query($list);
	$_POST = mysql_fetch_array($data);
}
?>

<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="all">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
      <a class="navbar-brand" href="index.php">SHOP</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="view_shop.php">Shops</a></li>
      <li><a href="view_godown.php">Godowns</a></li>
      <li><a href="#">Sales</a></li>
      <li><a href="view_expenses.php">Expenses</a></li>
	  <li><a href="#">Reports</a></li>
	  <li><a href="view_products.php">Products</a></li>
	  <li><a href="view_supplier.php">Suppliers</a></li>
	  <li><a href="view_stock.php">Stock</a></li>
	  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
    	<ul class="dropdown-menu">
      		<li><a href="#">Settings</a></li>
      		<li><a href="#">Logout</a></li>
   	 	</ul>
	  </li>
	</ul>
	</div>
  </div>
</nav>
<br>
<br>
<br>
<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>STOCK DETAILS</h2>
			</div> 
			<br />
				<div class="card-body card-block">
				<form  action="update_stock.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $_POST['id'];?>"/>
						<div class="row form-group">
							<div class="form-group">
							<div class="col-sm-6">
									<h4>Supplier Name:</h4>
										  <select name = "supply_id"  value="<?php echo $_POST['supply_id'];?>">
										    <option value="0">Select Supplier</option>
											<?php
												$sql = mysql_query('select * from supply_details');
													while($list = mysql_fetch_array($sql))
													{
											?>	
													<option value="<?php echo $list['id'];?>" <?php if($list['id']==$_POST['supply_id']){echo 'selected';}?> ><?php echo $list['name'];?></option>
													<?php
													}
													?>
												
										  </select>
							</div>
								<div class="col-sm-6">
										<h4>Godown Name:</h4>
										   <select name = "godown_id"  value="<?php echo $_POST['godown_id'];?>">
										    <option value="0">Select Godown</option>
											<?php
												$sql = mysql_query('select * from billing_godown');
													while($list = mysql_fetch_array($sql))
													{
													?>
														<option value="<?php echo $list['id'];?>" <?php if($list['id']==$_POST['godown_id']){echo 'selected';}?> ><?php echo $list['name'];?></option>
													<?php
													}
													?>
										  </select>
							</div>
							</div>
						</div>
						<div class="container">
							<table class="table">
								<tr>
									<th>Product</th>
									<th>Quantity</th>
									<th>Action</th>
								</tr>
							</table>
						<div class="row form-group">
						<div class="row sales_row" id="salesrow0">
							<div class="form-group">
								<div class="col-sm-4">
								<select type="text" name="product_id" id="product-0" value="<?php echo $_POST['product_id'];?>">
										    <option value="0">Select Product</option>
											<?php
												$sql = mysql_query('select * from product_details');
													while($list = mysql_fetch_array($sql))
													{
											?>
														<option value="<?php echo $list['id'];?>" <?php if($list['id']==$_POST['product_id']){echo 'selected';}?> ><?php echo $list['name'];?></option>
													<?php
													}
													?>
										  </select>
									
									
								</div>
								<div class="col-sm-4">
								<input type="text" name="quantity" id="quantity-0" class="form-control quantity" onClick="calcSubTotal('0','0')" placeholder="quantity"  value="<?php echo $_POST['quantity'];?>">
								</div>
								<div class="col-sm-4">
								<button><a href="javascript:void(0)" class="btn btn-success btn_add_more" data-toggle="modal">ADD</a></button>
								</div>
							</div>
						</div>
						</div>
							
						<div class="MoreDiv"> </div>
						<div class="container-fluid">
								<div class="col-sm-5">
								</div>
								<div class="col-sm-2">
									<button type="save" class="btn btn-primary" name="save">Update</button>
								</div>
								<div class="col-sm-5">
								</div>
				</div>
			
				</form>
				
	</div>
</div>
</div>
</body>
</html>