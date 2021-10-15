<div class="well well-sm" id="best_seller">ALL PRODUCT</div>
<div class="bg-1">
  <div class="container">
    <div class="row text-center">
      <?php
                // 	include_once("database.php");
        $result = pg_query($conn, "SELECT * FROM product");
        
          if (!$result) { //add this check.
            die('Invalid query: ' . pg_error($conn));
                        }
          while($row = pg_fetch_array($result, PGSQL_ASSOC)){
      ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img id="furniture" src="images/<?php echo $row['Pro_image']?>">
            <p><strong><?php echo $row['Product_Name']?></strong></p>
            <p>$<?php echo $row['Price']?></p>
            <a href="?page=cart"><button class="btn">Buy now</button></a>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>
