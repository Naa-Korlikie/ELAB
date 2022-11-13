<?php
include("../Controllers/product_controller.php");
include ("../Settings/core.php");
$brandlist= select_all_brand_ctr();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>ELAB| Brand</title>
</head>

<body >
    <div style="font-size: 40px; margin-left:500px; margin-bottom:100px;"> Add Brand
        <a href="../index.php" class="btn btn-dark text-light" style="margin-left:600px;" >Home</a>
    </div>   
        <div style=" margin-left:500px; margin-right:500px;">
            <form method="POST" action="../actions/add_brand.php" onsubmit="required()" name="form1">
                <label for="exampleInputEmail1" class="form-label">Enter Brand</label>
                <input  name="bname" type="text"  class="form-control" id="exampleInputEmail1">
                <br>
                <button type="submit" class="btn btn-dark text-light" name="Add">Add</button>
            </form>
            <br><br>
        </div>  
            <div style=" margin-left:300px; margin-right:300px;">
                <div class="row justify-content-center">
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand Name</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                        <?php
                            if ($brandlist) 
                            {
                                //displaying the brands available
                                foreach($brandlist as $one_item)
                                {
                                    $brandID = $one_item['brand_id'];
                                    $brandName = $one_item['brand_name'];
                                    echo " 
                                    <tr>
                                        <td>$brandID</td>
                                        <td>$brandName</td>
                                        <td>
                                            <a href='update_brand.php?edit=$brandID' class='btn btn-dark' '>edit</a>
                                            <a href='../actions/add_brand.php?delete=$brandID' class='btn btn-dark'>Delete</a>
                                        </td>
                                    </tr>";
                                }
                            }
                        ?>
                    </table>
            </div>
        <script src="../js/bform.js"></script>
</body>

</html>