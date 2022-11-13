<?php
include("../controllers/product_controller.php");
$brandName='';

if (isset($_POST['Add']) ) 
{
    $bname= addslashes($_POST['bname']);
    $check= insert_new_brand_ctr($bname);
    if ($check) 
    {
      //redirecting to the admin page
        header ("location:../admin/brand.php");
    } else 
    {
      echo "fail";
    }
}
  
// for delete
if (isset($_GET['delete']) ) 
{
  $brandID= $_GET['delete'];
  $check= delete_brand_ctr($brandID);
  if ($check) 
  {
    header("location:../admin/brand.php");
  } else 
  {
    echo "fail";
  }

}

   
  
?>