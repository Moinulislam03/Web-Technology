<p>
<?php
    session_start();
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?>
</p>
<div class="container" style="width:500px;">
<form action="../controller/productAdd.php" method="post">
    <fieldset >
        <legend><b>ADD PRODUCT</b></legend>
    <label for="fname">Name</label><br>
    <input type="text" name="pd_name"><br>
    <label for="fname">Buying Price</label><br>
    <input type="text" name="pd_buying_price"><br>
    <label for="fname">Selling Price</label><br>
    <input type="text" name="pd_selling_price"><br><hr>
    <input type="checkbox" name="display">
    <label for="fname">Display</label><br>
    <hr>
    <input type="submit" name="add" value="Save">
   
</fieldset>
</form>
</div>


