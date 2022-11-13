<!-- <?php require("../Settings/core.php");
require("../Controllers/product_controller.php");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class= "jumbotron" >
        <form action="../Actions/Add_product.php" method= "post"  enctype="multipart/form-data">
    <div class="form-group">
    <label >Category</label><br>
        <select name="prod_cat" id="prod_cat">
            <option value="item1"><?php echo $row['prod_cat'];?> </option>
            
        </select><br>
        <label >Brand</label><br>
        <select name="prod_brand" id="prod_brand">
        <option value="item1"><?php echo $row['prod_brand'];?> </option>
        </select><br>
        <label >Product title</label><br>
        <input type="text" name="prod_title" class="form-control" placeholder="Enter Product Title " >
    </div>
    <div class="form-group">
    <label >Product Price</label><br>
        <input type="text" name="prod_price" class="form-control" placeholder="Enter Price" >
    </div>
    <div class="form-group">
    <label >Product Description</label><br>
        <textarea type="text"name="description" class="form-control" placeholder="Enter Product Description" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label >Key Word</label><br>
        <input type="text" name="keyword" class="form-control" placeholder="Enter Key word " >
    </div>
    <div class="custom-file">
    <label class="custom-file-label" for="customFile">Choose file</label><br>
        <input type="file" name="image" class="custom-file-input" id="customFile">
        
    </div>
    <br>
    <br>
    <button type="submit" name="submit" class="btn btn-info btn-lg">Add</button>
</form>
    </div>
</div>

    </form>
</body>
</html>