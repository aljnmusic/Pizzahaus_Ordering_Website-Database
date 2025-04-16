<?php

session_start();

// Database connection
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start transaction
$conn->begin_transaction();

try {
    // Input validation and sanitization
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);

    $selectedItems = $_POST["selectedItems"];
    $totalPrice = $_POST["totalPrice"];

    // Insert customer data
    $stmt = $conn->prepare("INSERT INTO customer (customer_name, email, phone, address) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $address);
    $stmt->execute();
    $customerId = $stmt->insert_id;
    $stmt->close();

    // Insert order data
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, order_date, total_amount, order_status, payment_status) VALUES (?, CURDATE(), ?, 'Pending', 'Unpaid')");
    $stmt->bind_param("id", $customerId, $totalPrice);
    $stmt->execute();
    $orderId = $stmt->insert_id;
    $stmt->close();

    // Insert order items
    $stmt = $conn->prepare("INSERT INTO order_item (order_id, product_id, quantity) VALUES (?, ?, ?)");
    foreach ($selectedItems as $item) {
        $stmt->bind_param("iii", $orderId, $item['product_id'], $item['quantity']);
        $stmt->execute();
    }
    $stmt->close();

    // Commit transaction
    $conn->commit();

    // $_SESSION['total_price'] = $_POST['totalPrice'];

    $selectedItems = json_decode($_POST['selectedItems'], true);
    $totalPrice = $_POST['totalPrice'];

    // Store order details in session
    $_SESSION['selectedItems'] = $selectedItems;
    $_SESSION['totalPrice'] = $totalPrice;

    // Redirect or display success message
    header("Location: tracking.php");
    exit();

} catch (Exception $e) {
    // Rollback transaction on error
    $conn->rollback();
    echo "Failed to process order: " . $e->getMessage();
}

$conn->close();

?>
