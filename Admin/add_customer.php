<?php 
include('../lib/conn.php');
if(isset($_POST['save']))
{
	if(empty($_POST['name']))
	{
		echo '</br>customer name is required';
	}
	if(empty($_POST['mob_no']))
	{
		echo '</br>Mobile No is required';
	}
	if(empty($_POST['email']))
	{
		echo '</br> email is required';
	}
	if(!empty($_POST['name']))
	{
		mysql_query("insert into customer_details(name,email,mob_no)
						values('".$_POST['name']."','".$_POST['email']."','".$_POST['mob_no']."')");
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
				<h2>CUSTOMERS DETAILS</h2>
			</div> 
			<br />
				<div class="card-body card-block">
				<form  action="add_customer.php" method="POST">
							<div class="form-group">
								<label for="com" class=" form-control-label">Customer Name :</label>
									<input type="text" id="name" name="name" placeholder="Enter customer name " class="form-control">
							</div>
						
							<div class="form-group">
								<label for="gstno" class=" form-control-label">Email ID :</label>
									<input type="text" id="email" name="email" placeholder="Enter Email id" class="form-control">
							</div>
							<div class="form-group">
								<label for="mob" class=" form-control-label">Mobile No.</label>
									<input type="text" name="mob_no"  placeholder="Enter mobile no." id="mob_no" class="form-control">
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