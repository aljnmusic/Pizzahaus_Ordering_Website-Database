<?php

session_start();

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$port = 3307;

// Connect to Database
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, $port);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Redirect if customer_id is missing
if (!isset($_SESSION['customer_id'])) {
    header("Location: insert_customer.php");
    exit();
}

// Retrieve session data
$total_amount = $_SESSION['total_amount'] ?? 0;
$customer_id = $_SESSION['customer_id'];
$cart_data = json_decode($_SESSION['cart_data'], true);

// Insert order
$sql = "INSERT INTO orders (customer_id, order_date, total_amount, order_status, payment_status)
        VALUES (?, CURDATE(), ?, 'Pending', 'Unpaid')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("id", $customer_id, $total_amount);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id;  // Get the inserted order_id
    $stmt->close();
    
    // Insert each cart item into order_item table
    foreach ($cart_data as $item) {
        $product_id = $item['product_id']; // Assuming cart data has product_id
        $quantity = $item['quantity'];

        // Insert into order_item
        $sql_order_item = "INSERT INTO order_item (order_id, product_id, quantity) 
                           VALUES (?, ?, ?)";
        $stmt_order_item = $conn->prepare($sql_order_item);
        $stmt_order_item->bind_param("iii", $order_id, $product_id, $quantity);

        if (!$stmt_order_item->execute()) {
            die("Error inserting order item: " . $stmt_order_item->error);
        }

        $stmt_order_item->close();
    }

    mysqli_close($conn);

    // Redirect to tracking page
    header("Location: tracking.php");
    exit();
} else {
    die("Error inserting order: " . $stmt->error);
}

?>
