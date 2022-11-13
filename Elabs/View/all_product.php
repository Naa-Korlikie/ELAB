<?php
include("../Actions/product_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- area for products -->
<div style=" min-height:400px; padding-top:15px; padding-left:15px; background-color:#f5f5f5;">
      <h4  style="color:Black;"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp Products for Sale</h4>
        <div class="container">
          <div class='row row-cols-1 row-cols-md-3 g-4' >
            <?php
                foreach ($productlist as $aproduct) {
                  $product_id = $aproduct['product_id'];
                  $product_title = $aproduct['product_title'];
                  $product_price = $aproduct['product_price'];
                  $product_image = $aproduct['product_image'];
                  if (logged_in()==true) 
                  {
                    echo "
                    <div class='card-columns'>
                      <a href='single_product.php?vid=$product_id'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                          <img src=' ../uploads/$product_image' class='card-img-top' style='height: 250px; ' >
                            <div class='card-body style='font-size:20px; ' >
                              <span style='color:black; '>$product_title </span><br>
                              <span style='color:black; '>GHS $product_price </span><br> <br> 
                              <a href='../actions/add_to_cart.php?pid=$product_id' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                            </div>
                        </div>
                      </a>
                    </div> ";
                    }else
                    {
                      echo "
                        <div class='card-columns'>
                          <a href='single_product.php?vid=$product_id'  >
                            <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                              <img src=' ../uploads/$product_image' class='card-img-top' style='height: 250px; ' >
                                <div class='card-body style='font-size:20px; ' >
                                  <span style='color:black; '>$product_title </span><br>
                                  <span style='color:black; '>GHS $product_price </span><br> <br> 
                                  <a href='../login/login.php' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                                </div>
                            </div>
                          </a>
                        </div>";
                    }
                }
            ?>
        </div>
      </div>
    
</body>
</html>

