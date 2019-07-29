<?php
    include('../lib/conn.php');
    if (isset($_GET['id']))
    {
      $id1 = $_GET['id'];
      $list1 = "select * from billing_shop where id = $id1";
      $data = mysql_query($list1);
      $_POST = mysql_fetch_array($data);

      $usid = $_POST['user_id']; 
      $list2 = "select * from auth_user where id = $usid";
      $data1 = mysql_query($list2);
      $us = mysql_fetch_array($data1);
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
	<div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong><h3>Update Shop</h3></strong>
            </div>
            <br>
            <div class="card-body card-block">
                <form action="update.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
                  <input type="hidden" name="user_id" value="<?php echo $_POST['user_id'];?>">
                 
                    <div class="row form-group">
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label for="company" class=" form-control-label">Shop Id</label>
		                        <input type="text" id="company" name="shop_code" placeholder="Enter your shop id" class="form-control" value="<?php echo $_POST['shop_code'];?>">
		                    </div>
		                </div>
		                <div class="col-sm-6">    
		                    <div class="form-group">
		                        <label for="company" class=" form-control-label">Shop Name</label>
		                        <input type="text" id="company" name="name" placeholder="Enter your shop name" class="form-control" value="<?php echo $_POST['name'];?>">
		                    </div>
		                </div>
		                </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">GST No.</label>
                                            <input type="text" id="vat" name="gst_no" placeholder="DE1234567890" class="form-control" value="<?php echo $_POST['gst_no'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Address</label>
                                            <input type="textarea" id="street" name="address" placeholder="Enter your address" class="form-control" value="<?php echo $_POST['address'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">City</label>
                                            <input type="text" id="city" name="city" placeholder="Enter your city" class="form-control" value="<?php echo $_POST['city'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Postal Code</label>
                                            <input type="text" id="postal-code" name="post_code" placeholder="Postal Code" class="form-control" value="<?php echo $_POST['post_code'];?>">  
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" id="country" name="country" placeholder="Country name" class="form-control" value="<?php echo $_POST['country'];?>">
                                        </div>
                                        <div class="row form-group">
		                                    <div class="col-sm-6">
		                                        <div class="form-group">
		                                            <label for="username" class=" form-control-label">User Name</label>
		                                            <input type="text" id="username" name="username" placeholder="Enter your user name" class="form-control" value="<?php echo $us['username'];?>">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-6">    
		                                        <div class="form-group">
		                                            <label for="password" class=" form-control-label">Password</label>
		                                            <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $us['password'];?>">
		                                        </div>
		                                    </div>
                										</div>
                										<div class="container">
                												<button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                												<button type="submit" class="btn btn-warning" name="submit"><a style="text-decoration:none;">Update</a></button>
                										</div>
                                    </div>
                                </div>
                            </div>
						              </div>
						            </form>
					           </div>
				            </div>
			           </div>
		          </div>
</body>
</html>