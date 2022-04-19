<?php require("http://localhost:8081/PHP/Lab%20Task%205/model/model.php"); ?>
<?php 
function get_data(){
    return showAllProduct();
}
function get_data_by_name($name){
    return searchProduct($name);
}

?>