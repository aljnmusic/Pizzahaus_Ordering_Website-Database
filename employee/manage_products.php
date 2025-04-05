<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

$role = $_SESSION["role"];

if($role !== "Manager"){
    die ("You do not have permission to access this page.");
}

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = new mysqli($db_server, $db_user, $db_password, $db_name, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_SESSION["product_message"] = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $action = $_POST["action"];
    $product_name = $_POST["product_name"];
    $product_id = $_POST["product_id"];
    $product_price = $_POST["product_price"];
    $product_category = $_POST["product_category"];

    if($action == "add"){
        $check_sql = "SELECT * FROM product WHERE product_id = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("i", $product_id);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if($result->num_rows > 0){
            $_SESSION["product_message"] = "Product ID already exists, Please use a different ID";
        }
        else{
            $sql = "INSERT INTO product (product_id, name, category, price)
            VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issd", $product_id, $product_name, $product_category, $product_price);
            $stmt->execute();
            $_SESSION['product_message'] = "Product added successfully";
            $stmt->close();
        }
        $check_stmt->close();
    }
    else if($action == "edit"){
        $sql = "UPDATE product
                SET name = ?, category = ?, price = ? 
                WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdi", $product_name, $product_category, $product_price, $product_id);
        $stmt->execute();
        $_SESSION['product_message'] = "Product edited successfully";
        $stmt->close();
    }
    else if($action == "delete"){
        $sql = "DELETE FROM product where product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $_SESSION['product_message'] = "Product deleted successfully";
        $stmt->close();
    }
    else {
        $_SESSION['product_message'] = "Invalid Action";
    }

    header("Location: dashboard.php#manage_products");
    exit();
}
$conn->close();
?>