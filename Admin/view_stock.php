<?php
include('../lib/conn.php'); 
function detailname($table=null,$id=null)
{
  //echo "select * from ".$table." where id=$id";
  $sql=mysql_query("select * from ".$table." where id=$id");
  $list=mysql_fetch_array($sql);
  return $list['name'];
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

<div class="col-sm-5">
</div>
<div class="col-sm-5">
  <button class="btn btn-warning" ><a href="stock_main.php" style="text-decoration:none;">ADD STOCK</a></button>
</div>
<div class="col-sm-2">
</div>

<div class="container">
  <h3>VIEW STOCKS:</h3>
  <table class="table">
    <tr>
      <th>Sr. no.</th>
      <th>Supplier_id</th>
      <th>Godown_id</th>
      <th>Product_id</th>
      <th>Quantity</th>
      <th>Action</th>
    </tr>
    <?php
      $list=mysql_query("select * from stock_details");
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
      <th><?php echo detailname('supply_details',$row['supply_id']);?></th>
      <th><?php echo detailname('billing_godown',$row['godown_id']);?></th>
      <th><?php echo detailname('product_details',$row['product_id']);?></th>
      <th><?php echo $row['quantity'];?></th>
      <th>
        <a href="edit_stock.php?id=<?php echo $row['id'];?>">Edit/</a>
        <a href="delete_stock.php?id=<?php echo $row['id'];?>" onClick="return confirm('do you want to delete?');">Delete</a>
      </th>
  </tr>
  <?php
  
  $sr++;
      }
    }
    else
    {
      echo '<tr><th><h3> Data not found </h3></th></tr>';
    } 
  ?>
  </table>
</div>

</body>
</html>