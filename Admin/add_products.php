<?php 
include('../lib/conn.php');
if(isset($_POST['save']))
{
	if(empty($_POST['pro_code']))
	{
		echo '</br></br></br>Product Code is required';
	}
	if(empty($_POST['name']))
	{
		echo '</br>Product Name is required';
	}
	if(empty($_POST['pro_sell']))
	{
		echo '</br>Product Selling is required';
	}
	if(empty($_POST['pro_pur']))
	{
		echo '</br>Product Purchase is required';
	}
	if(empty($_POST['des']))
	{
		echo '</br>Product Description is required';
	}
	if(!empty($_POST['pro_code']))
	{
		mysql_query("insert into product_details (pro_code,name,pro_sell,pro_pur,des)
						values('".$_POST['pro_code']."','".$_POST['name']."','".$_POST['pro_sell']."','".$_POST['pro_pur']."','".$_POST['des']."')");
	}else
      {
        header('location:view_products.php');
      }
}
?>


<html>
<?php include('billpages/head.php');?><body>
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
				<h2>PRODUCT DETAILS</h2>
			</div> 
			<br/>
				<div class="card-body card-block">
					<form  action="add_products.php" method="POST">
							<div class="form-group">
								<label for="title" class=" form-control-label">Product/MSN Code</label>
									<input type="text" id="pro_code" name="pro_code" placeholder="Enter Product code" class="form-control">
							</div>		
							<div class="form-group">
								<label for="des" class=" form-control-label">Product Name</label>
									<input type="text" id="name" name="name" placeholder="Enter Product name" class="form-control">
							</div>
							<div class="form-group">
								<label for="total" class=" form-control-label">Selling Price</label>
									<input type="text" name="pro_sell"  id="pro_sell" class="form-control">
							</div>
							<div class="form-group">
								<label for="pay" class=" form-control-label">Purchasing Price</label>
									<input type="text" name="pro_pur" id="pro_pur" class="form-control">
							</div>
							<div class="form-group">
								<label for="bal" class=" form-control-label">Product Description</label>
									<input type="textarea" name="des"  id="des" class="form-control">
							</div>
						<div class="container-fluid">
							<button type="save" class="btn btn-primary" name="save">Submit</button>
						</div>
		       		</form>
				</div>
		</div>
</div>
</body>
</html>