<?php
  include('../lib/conn.php');
  if(isset($_POST['confirm']))
  {
    if(empty($_POST['title']))
    {
      echo 'title is required';
    }
    if(empty($_POST['total']))
    {
      echo '</br>Total is required';
    }
    if(empty($_POST['paid']))
    {
      echo '</br>Paid amount is required';
    }
    if(empty($_POST['person_name']))
    {
      echo '</br>name is required';
    }
    if(!empty($_POST['title']))
    {
      $sql = mysql_query("select * from expense_detail where title='".$_POST['title']."'");
      $num = mysql_num_rows($sql);
      if($num==0)
      {
        mysql_query("insert into expense_detail (title, des, total, paid, bal, person_name)
              values('".$_POST['title']."','".$_POST['des']."','".$_POST['total']."','".$_POST['paid']."','".$_POST['bal']."','".$_POST['person_name']."')");
        
      }else
      {
        header('location:add_expense.php');
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
<form action="add_expense.php" method="post">
  <div class="form-group">
    <h3>Expense Details</h3>
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="des">Description</label>
    <input type="textarea" class="form-control" id="des" name="des">
  </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="total">Total</label>
        <input type="text" class="form-control" id="total" name="total" onblur="sub_total()">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="pay">Paid Amount</label>
        <input type="text" class="form-control" id="paid" name="paid" onblur="sub_total()">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label for="bal">Balance</label>
        <input type="text" class="form-control" id="bal" name="bal" readonly='readonly'>
      </div>
    </div>
    <div class="form-group">
    <label for="name">Person Name</label>
    <input type="text" class="form-control" id="name" name="person_name">
  </div><br>
<button type="submit" class="btn btn-warning" name="confirm"><a style="text-decoration:none;">Confirm</a></button>
</form>
</div>
</body>
</html>


<script>
function sub_total()
{
  //alert();
  var last = 0;
  var total = $('#total').val();
  var paid = $('#paid').val();
  last = total - paid;
  $('#bal').val(last);
}
</script>