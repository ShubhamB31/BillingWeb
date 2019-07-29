<?php
include('../lib/conn.php');
if (isset($_GET['id']))
{
	$id1 = $_GET['id'];
	$list = "select * from expense_detail where id = $id1";
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
				<h2>UPDATE EXPENSE</h2>
			</div> 
			<br />
			<div class="card-body card-block">
				<form  action="update_supply.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $_POST['id'];?>"/>
									<div class="form-group">
										<label for="title" class=" form-control-label">Title</label>
										<input type="text" name="title" value="<?php echo $_POST['title'];?>" id="title" placeholder="Enter code" class="form-control">
									</div>
						
									<div class="form-group">
										<label for="des" class=" form-control-label">Description</label>
										<input type="text" name="des" value="<?php echo $_POST['des'];?>" id="des" class="form-control">
									</div>
									<div class="form-group">
										<label for="total" class=" form-control-label">Total</label>
										<input type="text" name="total" value="<?php echo $_POST['total'];?>" id="total" placeholder="" class="form-control">
									</div>
									<div class="form-group">
										<label for="paid" class=" form-control-label">Paid</label>
										<input type="text" name="paid" value="<?php echo $_POST['paid'];?>" id="paid" placeholder="" class="form-control">
									</div>
									<div class="form-group">
										<label for="bal" class=" form-control-label">Balance</label>
										<input type="text" name="bal" value="<?php echo $_POST['bal'];?>" id="bal" placeholder="" class="form-control">
									</div>
									<div class="form-group">
										<label for="per_name" class=" form-control-label">Person Name</label>
										<input type="text" name="person_naem" value="<?php echo $_POST['person_name'];?>" id="person_name" placeholder="" class="form-control">
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
