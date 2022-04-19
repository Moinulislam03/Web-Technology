<?php 
    require("../model/model.php");
    if(isset($_GET["id"])){ 
        $row = showProduct($_GET["id"]);
?>
<p>Name: <?php echo $row["Name"]; ?></p>
<p>Buying Price: <?php echo $row["Buying Price"]; ?></p>
<p>Selling Price: <?php echo $row["Selling Price"]; ?></p>
<p>Displayable: Yes </p>
<form action="../controller/productDelete.php" method="post">
    <input type="hidden" name="serial" value="<?php echo $row["SL"]; ?>">
    <hr>
    <input type="submit" name="delete" value="Delete">
</form>
<?php }else{
    header("location: ../view/display.php");
} ?>

