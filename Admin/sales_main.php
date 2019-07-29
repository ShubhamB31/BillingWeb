<?php include('../lib/conn.php');

if(isset($_POST['submit']))
{
  // //print_r($_POST['product_id']);
  // foreach($_POST['product_id'] as $pk => $pv)
  // {
  //   //print_r($pk.'=>'.$pv);
  //   foreach($_POST['quantity'] as $qk => $qv)
  //   {
  //     //print_r($pv.'=>'.$qv);

  //    mysql_query("insert into stock_details (supply_id, godown_id, product_id, quantity)
  //            values('".$_POST['supply_id']."','".$_POST['godown_id']."','".$pv."','".$qv."')");

  //   }
  // }

  $Prod_id = array();
  $qty = array();
  foreach($_POST['product_id'] as $pk => $pv)
  {
    $Prod_id[] = $pv;
  }

  foreach($_POST['quantity'] as $qk => $qv)
  {
    $qty[] = $qv;
  }
  //print_r($Prod_id);
  //print_r($qty);
  for($i=0; $i<count($Prod_id); $i++)
  {
    //print_r($i);
    mysql_query("insert into stock_details (supply_id, godown_id, product_id, quantity)
              values('".$_POST['supply_id']."','".$_POST['godown_id']."','".$Prod_id[$i]."','".$qty[$i]."')");
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
          <li><a href="sales_main.php">Sales</a></li>
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
  <h2>Stock</h2>
    <div class="col-sm-3">
    </div>
    
</div>
  <div class="col-sm-1">
  </div>
</div>
<br>

<style>
.Sale_row{padding:10px;}
</style>
<form action="sales_main.php" method="post">
<div class="row">
  <div class="col-sm-12">
    <div class="col-sm-4">
      <h4>Customer Name :
      <select name="customer_id">
        <option value="0">Select Customer</option>
        <?php
          $sql = mysql_query('select * from customer_details;');
          while($list = mysql_fetch_array($sql))
          {
            echo '<option value="'.$list['id'].'">'.$list['name'].'</option>';
          } 
        ?>
      </select></h4><br>
      <button class="btn btn-warning" ><a href="add_customer.php" style="text-decoration:none;">ADD CUSTOMER</a></button>
    </div>
    <div class="col-sm-4">
      <h4>Invoice No.</h4>
      <input type="text" id="invoice" class="form-control">
    </div>


<br>
<br>
<br>
<br>

</div>
</div>
<div class="col-sm-5">
</div>
<div class="col-sm-2">
  <button type="submit" class="btn btn-warning" name="submit"><a style="text-decoration:none;">Submit</a></button>
</div>
<div class="col-sm-5">
</div>
<form>

</body>
</html>

<script>
$(".btn_add_more").on("click",function(){
  //alert();
  var rno = $('.Sale_row').length;
  var ts = Math.floor(Date.now());
  $('.MoreDiv').append('<div class="row"><div class="col-sm-12" style="margin-top:20px; margin-left:20px;"><div class="row Sale_row" id="SaleRow'+rno+'"><div class="col-sm-4"><select name="product_id['+ts+']" id="product-'+ts+'"></select></div><div class="col-sm-4"><input type="text" name="quantity['+ts+']" id="quantity-'+ts+'" class="form-control quantity" placeholder="quantity"></div><div class="col-sm-4"><button><a href="javascript:void(0)" class="btn btn-danger btn_remove" onclick="removeRow(\''+rno+'\');">REMOVE</a></button></div></div></div></div>');
getProductList(ts);
});

function removeRow(rno)
{
  $("#SaleRow"+rno+"").remove();
}

function getProductList(inputId)
{
  $.ajax({
    type: "post",
    url: 'product_list.php',
    success: function(data){
      $("#product-"+inputId+"").html(data);
    }
  });
}
</script>