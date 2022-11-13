<?php
include ("../Settings/core.php");
include("../Controllers/product_controller.php");
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
               
                if (isset($_GET['vid'])) {
                    //getting the id and product list
                    $productID= $_GET['vid'];
                    $product_list=select_one_product_ctr($productID);
                    $product_cat= $product_list['product_cat'];
                    $cname=select_one_category_ctr($product_cat);
                    $product_brand= $product_list['product_brand'];
                    $bname=select_one_brand_ctr($product_brand);
                    $product_title= $product_list['product_title'];
                    $product_price= $product_list['product_price'];
                    $product_desc= $product_list['product_desc'];
                    $product_image= $product_list['product_image'];
                    $product_keywords= $product_list['product_keywords'];
               
                    echo "
                    <div class='card-columns'>
                      <a href='single_product.php?vid=$productID'  >
                        <div class='card ' style=' width: 300px; margin-top: 40px;margin-left: 30px; text-align:center;  '>
                          <img src=' ../uploads/$product_image' class='card-img-top' style='height: 250px; ' >
                            <div class='card-body style='font-size:20px; ' >
                              <span style='color:black; '>$product_title </span><br>
                              <span style='color:black; '>GHS $product_price </span><br> <br> 
                              <a href='../actions/add_to_cart.php?pid=$productID' class='btn btn-dark text-light' style='width: 220px;'>Add to Cart</a>
                            </div>
                        </div>
                      </a>
                    </div> ";
                    }else
                    {
                     header ("location:../Admin/Product.php");
        
                    }
            
            ?>
        </div>
      </div>
    
</body>
</html>

