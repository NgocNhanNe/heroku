<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATNSTORE.com</title>
    <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
    <link rel = " stylesheet " href = " http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="format.css">

</head>
<?php
include_once("connection.php");
?>
<body>
<div class="well well-sm" id="best_seller">INTRODUCTION TO OUR SHOWROOM</div>
<div class="product" id="product01">
    <img src="images/Nike-x-unhcr-2006.jpg"/>
      <div><span>Nike x UNHCR 2006 World cup</span></div>
</div>
<div class="product" id="product02">
    <img src="images/CocoChanel.jpg"/>
    <div><span>Coco Chanel 1000% Bearbrick</span></div>
</div>
  <div class="product" id="product03">
    <img src="images/Blacksense.jpg"/>
      <div><span>The Black Sense Market</span></div>
    </div>
    <div class="product" id="product04">
          <img src="images/Colette.jpg"/>
          <div><span>Colette 10th anniversary</span></div>
      </div>


      <br><br><br><br><br><br><br><br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/background1.jpg" alt="Image">
        <div class="carousel-caption"></div>      
    </div>

    <div class="item">
        <img src="images/background2.jpg" alt="Image">
        <div class="carousel-caption"></div>      
    </div>

    <div class="item">
        <img src="images/background3.jpg" alt="Image">
        <div class="carousel-caption"></div>      
    </div>

    <div class="item">
        <img src="images/background4.jpg" alt="Image">
        <div class="carousel-caption"></div>      
    </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
  </div>
</div>
     
<div class="bg-1">
    <div class="container">
    <div class="well well-sm" id="best_seller">BEST SELLER</div>
      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/funiture.jpg" alt="Furniture">
            <p><strong>FURNITURE</strong></p>
            <p>$205</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/pillows.jpg" alt="Pillows">
            <p><strong>DÉCOR PILLOWS</strong></p>
            <p>$85</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/rugs.jpg" alt="Rugs">
            <p><strong>RUGS</strong></p>
            <p>$108</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/curtains.jpg" alt="Curtains">
            <p><strong>CURTAINS</strong></p>
            <p>$380</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/glass.jpg" alt="Glass">
            <p><strong>GLASS</strong></p>
            <p>$15</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/fruit_plate.jpg" alt="fruit_plate" width="100" height="100">
            <p><strong>FRUIT PLATE</strong></p>
            <p>$42</p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="bg-1">
    <div class="container">
      <div class="well well-sm" id="many">Many <span style="color: green;">SELECTION</span>. Don't speak about <span style="color: green;">PRICE!</span>
      </div>
    </div>
  </div>

      <div id="many"><span style="color: darkgreen;">DESIGNS FROM ORNAMENTS</span>
        <div style="font-size: small;">Be create in your own style!</div> 
    </div>
  </div>
  </div>
</div>
<br><br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img id="exists" src="images/exists_pic1.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>

    <div class="item">
      <img id="exists" src="images/exists_pic2.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>
  
    <div class="item">
      <img id="exists" src="images/exist_pic3.png" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>
    <div class="item">
      <img id="exists" src="images/exists4.jpg" alt="pic">
      <div class="carousel-caption">
      </div>      
    </div>
  </div>
</div>
<br>
<br>

</body>
</html>