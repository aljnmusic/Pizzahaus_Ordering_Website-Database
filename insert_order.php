<?php

session_start();

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$customer_id = $_SESSION['customer_id'] ?? null;
// $total_amount = $_POST['total_amount'];


$sql = "INSERT INTO orders (customer_id, order_date, total_amount, order_status, payment_status)
        VALUES ('$customer_id', CURDATE(), 0, 'Pending', 'Unpaid')";

    if ($conn->query($sql) === TRUE) {
        $order_id = mysqli_insert_id($conn); // Retrieve the newly created order ID
        header("Location: tracking.php");
        exit();
    } else {
        die("Error inserting order: " . $conn->error);
    }

mysqli_close($conn);

?>