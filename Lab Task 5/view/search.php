<?php 
session_start();
require("../controller/productList.php");
?>
<h1>Search Product</h1><br>
<table border="1">
<thead>
    <tr>
        <th>Name</th>
        <th>Profit</th>
        <th colspan="2">Action</th>
    </tr>
</thead>
<tbody>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="nm" placeholder="Search by product name">
        <input type="submit" value="Search By Name" name="search">
    </form>
    
    <?php 
    $name = "";
    if(isset($_POST["search"])){
        $name = $_POST["nm"];
    }
    $rows = get_data_by_name($name);
    foreach($rows as $i => $row){ 
    ?>
    <tr>
        <td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Buying Price"]; ?></td>
        <td><?php echo $row["Selling Price"]; ?></td>
        <td><a href="http://localhost:8081/PHP/Lab%20Task%205/delete.php?id=<?php echo $row["SL"]; ?>">edit</a></td>
        <td><a href="/New folder/Lab task 5/view/updateproduct-view.php?id=<?php echo $row["SL"]; ?>">delete</a></td>
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


