<?php require("../Settings/core.php");
require("../Controllers/product_controller.php");

$brandid= $_POST['brand_id'];
$updated_brandname= $_POST['updated_brandid'];


if(!updatebrand_ctr($brandid,$updated_full_name)==true)
{
    echo 'did not update';
    header( "Location: ../Admin/editbrand.php ");
}else{
    header( "Location: ../Admin/editbrand.php ");
}

?>