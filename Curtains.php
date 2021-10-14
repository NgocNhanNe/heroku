<div class="well well-sm" id="best_seller">CURTAINS</div>
<div class="bg-1">
  <div class="container">
    <div class="row text-center">
      <?php
                // 	include_once("database.php");
        $result = mysqli_query($conn, "SELECT * FROM product where Cat_ID ='C003'");
        
          if (!$result) { //add this check.
            die('Invalid query: ' . mysqli_error($conn));
                        }
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img id="furniture" src="images/<?php echo $row['Pro_image']?>">
            <p><strong><?php echo $row['Product_Name']?></strong></p>
            <p>$<?php echo $row['Price']?></p>
            <button class="btn">Buy now</button>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>
