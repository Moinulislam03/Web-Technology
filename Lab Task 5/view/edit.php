<?php 
    require("../controller/productInfo.php");
    if(isset($_GET["id"])){
        $row = get_a_product($_GET["id"]);
    }else{
        header("location: display.php");
    }

?>
<div class="container" style="width:500px;">
<form action="../controller/productUpdate.php" method="post">
    <fieldset>
    <legend>Edit Product</legend>
    <label for="fname">Name</label><br>
    <input type="text" name="pd_name" value="<?php echo $row["Name"]; ?>"><br>
    <label for="fname">Buying Price</label><br>
    <input type="text" name="pd_buying_price" value="<?php echo $row["Buying Price"]; ?>"><br>
    <label for="fname">Selling Price</label><br>
    <input type="text" name="pd_selling_price" value="<?php echo $row["Selling Price"]; ?>"><br>
    <input type="hidden" name="sl" value="<?php echo $_GET["id"]; ?>">
    <input type="checkbox" name="display">
    <label for="fname">Display</label><br>
    <br>
    <hr>
    <input type="submit" name="change" value="Save">
    
</fieldset>
</form>
</div>

