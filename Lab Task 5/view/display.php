<?php 
session_start();
require("../controller/productList.php");
?>

<div class="container" style="width:500px;">
<fieldset>
 <legend><b>DISPLAY</b></legend>
    
<table border="1">
<thead>
    <tr>
        <th>Name</th>
        <th>Profit</th>
        <th colspan="2">Action</th>
    </tr>
</thead>
<tbody>
    <?php 
    $rows = get_data();
    foreach($rows as $i => $row){
    ?>
    <tr>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Buying Price"]; ?></td>
        <td><?php echo $row["Selling Price"]; ?></td>
        <td><a href="http://localhost:8081/PHP/Lab%20Task%205/delete.php?id=<?php echo $row["SL"]; ?>">Delete</a></td>
        <td><a href="http://localhost:8081/PHP/Lab%20Task%205/update.php?id=<?php echo $row["SL"]; ?>">Edit</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<p><?php 
    if(isset($_SESSION["pd_msg"])){
        echo $_SESSION["pd_msg"];
        $_SESSION["pd_msg"] = "";
    }
?></p>

</fieldset>
</div>


