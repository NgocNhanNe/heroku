<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DECORAHOUSE.com</title>
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel = " stylesheet " href = " http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="format.css">

</head>
<?php
include_once("connection.php");
session_start();
?>
<body>
<header>
<div class="discover" align="center"><a href="?page=aboutus">Discover What Decora House is all about<img class="img" src="images/scroll-right-icon.png"></a></div>
  <div class="col-md-12">
  <div class="row">
    <div class="location"><a href="https://by.com.vn/8ovUMe"><img class="img" src="images/Location-2-icon.png"><span style="color:black">Location</span></a>
      <a href="?page=explore-style"><img class="img" src="images/Very-Basic-Idea-icon.png"><span style="color:black">Ideas and inspiration</span></a>
        <div class="home" align="center">
        <?php
        if(isset($_SESSION['us']) && $_SESSION['us'] !=""){
        ?>
        <a href="?page=update_customer"><img class="img" src="images/account.png"><span style="color:black">Hi,<?php echo $_SESSION['us']?>!</span></a>
        &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-out"><a href="?page=logout"><span style="color:black">Logout</a></span>&nbsp;&nbsp;&nbsp;
        <?php
        }
        else
        {
        ?>
        <img class="img" src="images/Lock-icon.png"><a href="?page=login"><span style="color:black">Log in</a></span>&nbsp;&nbsp;&nbsp;
        <img class="img" src="images/Star-icon.png"><a href="?page=register"><span style="color:black">Register</a></span>
        <?php
        }
        ?>
        <a href="?page=cart"><span style="color:black"><img class="img" src="images/Shopping-Cart-icon.png">My Cart</span></a>
      </div>
    </div>
    </div>
  </div>
</div>
<nav class="navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="?page=home"><span style="bold;20px;color:darkgreen">DECOR<span class="glyphicon glyphicon-leaf"></span>HOUSE.com</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="?page=home">Home</a></li>
        <li><a href="?page=furniture">Furniture</a></li>
        <li><a href="?page=rugs">Rugs</a></li>
        <li><a href="?page=curtains">Curtains</a></li>
        <li><a href="?page=kitchen-dining">Kitchen & Dining</a></li>
        <li><a href="?page=bed-bath">Bed & Bath</a></li>
        <li><a href="?page=wall-decor">Wall Decor</a></li>
        <li><a href="?page=all_product">All Products</a></li>
        <li><a href="?page=management_category">Management Category</a></li>
        <li><a href="?page=management_product">Management Product</a></li>
      </ul>
    </div>
  </div>
  <div id="welcome">
    <marquee direction="left" behavior="scroll" scrollamount="8">
        Welcome to DECORA HOUSE. Shop safely your way<span class="glyphicon glyphicon-asterisk"></span>
    </marquee>
</div>
</nav>
</header>
   
<?php
if(isset($_GET['page']))
{
    $page = $_GET['page'];
    if($page=="home"){
        include_once("home.php");
    }
    elseif($page=="furniture")
    {
      include_once("Furniture.php");
    } 
    elseif($page=="rugs")
    {
      include_once("Rugs.php");
    } 
    elseif($page=="curtains")
    {
      include_once("Curtains.php");
    }
    elseif($page=="kitchen-dining")
    {
      include_once("Kitchen-Dining.php");
    }
    elseif($page=="bed-bath")
    {
      include_once("Bed-Bath.php");
    }
    elseif($page=="wall-decor")
    {
      include_once("Wall-Decor.php");
    }
    elseif($page=="aboutus")
    {
      include_once("About-us.php");
    }
    elseif($page=="login")
    {
      include_once("Login.php");
    }
    elseif($page=="logout")
    {
      include_once("Logout.php");
    }
    elseif($page=="register")
    {
      include_once("Register.php");
    }
    elseif($page=="guarantee")
    {
      include_once("Guarantee.php");
    }
    elseif($page=="explore-style")
    {
      include_once("Explore-style.php");
    }
    elseif($page=="update_customer")
    {
      include_once("Update_customer.php");
    }
    elseif($page=="management_category")
    {
      include_once("Category_Management.php");
    }
    elseif($page=="management_product")
    {
      include_once("Product_Management.php");
    }
    else if($page=="add_category"){
      include_once("Add_Category.php");
    }
    else if($page=="update_category"){
      include_once("Update_Category.php");
    }
    else if($page=="add_product"){
      include_once("Add_Product.php");
    }
    else if($page=="update_product"){
      include_once("Update_Product.php");
    }
    else if($page=="all_product"){
      include_once("All_product.php");
    }
    else if($page=="cart"){
      include_once("Cart.php");
    }
}
else{
    include("home.php");
}
?>

<footer>
  <div class="container-fluid text-center" id="footer">
    <h2>SERVICES</h2>
    <h4>Thanks for trusting us<span class="glyphicon glyphicon-heart"></span></h4>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <h4><b>About us</b></h4>
        <p><a href="?page=aboutus">Decora House</a></p>
        <p><a href="?page=guarantee">Guarantee</a></p>
      </div>
      <div class="col-sm-4">
        <h4><b>Quick Links</b></h4>
        <p><a href="?page=home">Home</a></p>
        <p><a href="?page=kitchen-dining">Kitchen & Dining</a></p>
        <p><a href="?page=rugs">Rugs</a></p>
        <p><a href="?page=curtains">Curtains</a></p>
        <p><a href="?page=explore-style">Explore Styles</a></p>
      </div>
      <div class="col-sm-4">
        <h4><b>Connect with us</b></h4>
        <a href="https://www.facebook.com/planejadosdecorahouse/"><img id="con_us" src="images/facebook.png"></a>&nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/decorahouse/"><img id="con_us" src="images/Instagram.png"></a>&nbsp;&nbsp;&nbsp;
        <a><img id="con_us" src="images/twitter.png"></a>
        <p></p>
        <p></p>
        <p><span class="glyphicon glyphicon-phone-alt" style="font-size: 20px">:&nbsp;<b>0290.999.9999<b></span></p>
        <p></p>
        <img align="right" src="images/decora_footer.gif" width="170px" height="130px">
      </div>
    </div>
  </div>
</footer>
</body>
</html>
