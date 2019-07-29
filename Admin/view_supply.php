<?php
include('../lib/conn.php'); 
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
	<div class="col-sm-5">
	</div>
	<div class="col-sm-2">
	<button class="au-btn au-btn-icon btn-warning" data-toggle="modal"><a style="text-decoration:none;" href="add_supply.php">ADD SUPPLY</a></button>
	</div>
	<div class="col-sm-5">
	</div>
</div>

<div class="container">
	<h3>VIEW SUPPLIERS</h3><br>
	<table class="table">
		<tr>
			<th>Sr. no.</th>
			<th>Company Name</th>
			<th>GST No.</th>
			<th>Mobile No.</th>
			<th>Address</th>
			<th>City</th>
			<th>Post Code</th>
			<th>Action</th>
		</tr>
	  <?php
	  	$list=mysql_query("select * from supply_details");
		$num=mysql_num_rows($list);
		$sr=1;
		if($num !=0)
		{
			while($row=mysql_fetch_array($list))
			{
			//print_($row);
	  ?>
	  <tr>
	  	<th><?php echo $sr;?></th>
		<th><?php echo $row['com_name'];?></th>
		<th><?php echo $row['gst_no'];?></th>
		<th><?php echo $row['mob_no'];?></th>
		<th><?php echo $row['address'];?></th>
		<th><?php echo $row['city'];?></th>
		<th><?php echo $row['post_code'];?></th>
		<th>
			<a href="edit_supply.php?id=<?php echo $row['id'];?>">Edit/</a>
			<a href="delete_supply.php?id=<?php echo $row['id'];?>" onClick="return confirm('do you want to delete?');">Delete</a>
		</th>
	</tr>
	<?php
	
	$sr++;
			}
		}else{
			echo '<tr><th><h3> Data not found </h3></th></tr>';
			 } 
	?>
	</table>
</div>

</body>
</html>