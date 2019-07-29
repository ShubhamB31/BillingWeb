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
          <li><a href="view_stock.php">Stock</a></li>
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

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

              <div class="item active">
                <img src="../images/04.jpg" height="750px" width:"100%">
              </div>

              <div class="item">
                <img src="../images/05.jpg" height="750px" width:"100%">
              </div>
            
              <div class="item">
                <img src="../images/06.jpg" height="750px" width:"100%">
              </div>
          

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

</body>
</html>
