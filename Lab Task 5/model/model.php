<?php require("db_connect.php"); ?>

<?php 
function showAllProduct(){
    $conn = dbConnect();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function addProduct($data){
    $conn = dbConnect();
    $selectQuery = "INSERT INTO `products` VALUES ( :name, :buying_price, :selling_price);";
    
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':buying_price' => $data['pd_buying_price'],
            ':selling_price' => $data['pd_selling_price']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
    $conn = dbConnect();
    $selectQuery = "DELETE FROM `products` WHERE `Name` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function showProduct($id){
    $conn = dbConnect();
    $selectQuery = 'SELECT * FROM `products` WHERE `Name` = ?';
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function updateProduct($id, $data){
    $conn = dbConnect();
    $selectQuery = 'UPDATE `products` SET `Buying Price`=:buying_price,`Selling Price`=:selling_price WHERE `Name`= :name';
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':buying_price' => $data['pd_buying_price'],
            ':selling_price' => $data['pd_selling_price']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function searchProduct($name){
    $conn = dbConnect();
    $selectQuery = "SELECT * FROM `products` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>