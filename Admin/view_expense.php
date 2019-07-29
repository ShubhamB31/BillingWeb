<?php include('../lib/conn.php');?>
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
<br>
<div class="container">
	<div class="col-sm-5">
	</div>
	<div class="col-sm-2">
		<button class="btn btn-warning" ><a href="add_expense.php" style="text-decoration:none;">ADD EXPENSE</a></button>
	</div>
	<div class="col-sm-5">
	</div>
</div>


  <h2>View Godowns</h2><br>    
  <table class="table">
      <tr>
        <th>Sr.</th>
        <th>title</th>
        <th>Description</th>
        <th>Total</th>
        <th>Paid</th>
        <th>Balance</th>
        <th>Person Name</th>
        <th>Action</th>
      </tr>
	<?php
      	$sql = mysql_query("select * from expense_detail;");
      	$num = mysql_num_rows($sql);
        $sr=1;
        if($num != 0)
        {
          while($row = mysql_fetch_array($sql))
          {
          // print_r($row);
          ?>
          <tr>
            <th><?php echo $sr;?></th>
            <th><?php echo $row['title'];?></th>
            <th><?php echo $row['des'];?></th>
            <th><?php echo $row['total'];?></th>
            <th><?php echo $row['paid'];?></th>
            <th><?php echo $row['bal'];?></th>
            <th><?php echo $row['person_name'];?></th>
            <th>
              <button><a href="edit_expense.php?id=<?php echo $row['id'];?>" style="text-decoration:none;">Edit</a></button>
              <button><a href="delete_expense.php?id=<?php echo $row['id'];?>" onclick="return confirm('Do you want to delete ?');" style="text-decoration:none;">Delete</a></button>
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


</body>
</html>