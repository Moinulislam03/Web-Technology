<?php 
    session_start();
    require("../model/model.php");

    $_SESSION["pd_msg"] = "";

    if(isset($_POST["delete"])){
        deleteProduct($_POST["serial"]);
        $_SESSION["pd_msg"] = " product is deleted ";
    }else{
        $_SESSION["pd_msg"] = " Id is not selected ";
    }
    header("location: ../view/view.php");


?>