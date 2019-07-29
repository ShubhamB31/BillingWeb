<?php
	include('../lib/conn.php');
	if(isset($_POST['confirm']))
	{
		if(empty($_POST['godown_code']))
		{
			echo 'Godown Code is required';
		}
		if(empty($_POST['name']))
		{
			echo '</br>Name is required';
		}
		if(empty($_POST['address']))
		{
			echo '</br>Address is required';
		}
		if(empty($_POST['username']))
		{
			echo '</br>Username is required';
		}
		if(empty($_POST['password']))
		{
			echo '</br>Password is required';
		}
		if(!empty($_POST['godown_code']))
		{
			$sql = mysql_query("select * from billing_godown where godown_code='".$_POST['godown_code']."'");
			$num = mysql_num_rows($sql);
			if($num==0)
			{
                $level = 2;
				mysql_query("INSERT INTO auth_user (username, password, level)
							VALUES ('".$_POST['username']."','".$_POST['password']."',$level)");
				$last_id = mysql_insert_id();
				mysql_query("INSERT INTO billing_godown (user_id, godown_code, name, gst_no, address, city, post_code, country)
					VALUES ($last_id,'".$_POST['godown_code']."','".$_POST['name']."','".$_POST['gst_no']."','".$_POST['address']."','".$_POST['city']."','".$_POST['post_code']."','".$_POST['country']."')");
				

			}else
			{
				header('location:index.php');
			}
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
	<div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong><h3>Add Godown</h3></strong>
            </div>
            <br>
            <div class="card-body card-block">
                <form action="add_godown.php" method="post">
                    <div class="row form-group">
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label for="company" class=" form-control-label">Godown Id</label>
		                        <input type="text" id="company" name="godown_code" placeholder="Enter your godown id" class="form-control">
		                    </div>
		                </div>
		                <div class="col-sm-6">    
		                    <div class="form-group">
		                        <label for="company" class=" form-control-label">Godown Name</label>
		                        <input type="text" id="company" name="name" placeholder="Enter your godown name" class="form-control">
		                    </div>
		                </div>
		                </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">GST No.</label>
                                            <input type="text" id="vat" name="gst_no" placeholder="DE1234567890" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Address</label>
                                            <textarea type="text" id="street" name="address" placeholder="Enter your address" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class=" form-control-label">City</label>
                                            <input type="text" id="city" name="city" placeholder="Enter your city" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Postal Code</label>
                                            <input type="text" id="postal-code" name="post_code" placeholder="Postal Code" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" id="country" name="country" placeholder="Country name" class="form-control">
                                        </div>
                                        <div class="row form-group">
		                                    <div class="col-sm-6">
		                                        <div class="form-group">
		                                            <label for="username" class=" form-control-label">User Name</label>
		                                            <input type="text" id="username" name="username" placeholder="Enter your user name" class="form-control">
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-6">    
		                                        <div class="form-group">
		                                            <label for="password" class=" form-control-label">Password</label>
		                                            <input type="password" id="password" name="password" placeholder="Enter your password" class="form-control">
		                                        </div>
		                                    </div>
										</div>
										<div class="container">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Reset</button>
												<button type="confirm" class="btn btn-warning" name="confirm"><a style="text-decoration:none;">Confirm</a></button>
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