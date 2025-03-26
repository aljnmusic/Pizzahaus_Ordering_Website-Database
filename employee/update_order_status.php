<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $order_id = $_POST["order_id"];
    $status = $_POST["status"];

    $conn = new mysqli("localhost", "root", "", "pizzahaus", 3307);

    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "UPDATE orders SET order_status = ? where order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $order_id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Order status updated successfully.";
    } else {
        $_SESSION['message'] = "Error updating order status: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    
    header("Location: dashboard.php#update_order_status");
    exit();
}

?>