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

    $payment_method = "Cash";
    $payment_status = "Unpaid";

    $sql_invoice = "INSERT INTO invoice (order_id, amount, payment_method, payment_status, issue_date)
                    VALUES (?, ?, ?, ?, CURDATE())";
    $stmt_invoice = $conn->prepare($sql_invoice);
    $stmt_invoice->bind_param("idss", $order_id, $total_amount, $payment_method, $payment_status);
    $stmt_invoice->execute();
    $stmt_invoice->close();
    
    // Insert each cart item into order_item table
    foreach ($cart_data as $item) {
        $product_name = $item['name'];  // Get the product name from the cart
        $quantity = $item['quantity'];  // Get the quantity from the cart
    
        // Retrieve the correct product_id from the database based on the product name
        $product_query = "SELECT product_id FROM product WHERE name = '$product_name' LIMIT 1";
        $result = $conn->query($product_query);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $product_id = $row['product_id'];
    
            // Insert into order_item table with the correct product_id
            $sql_order_item = "INSERT INTO order_item (order_id, product_id, quantity) 
                               VALUES ('$order_id', '$product_id', '$quantity')";
    
            if (!$conn->query($sql_order_item)) {
                die("Error inserting order item: " . $conn->error);
            }           
        } else {
            die("Error: Product not found in database!");
        }
    }

    mysqli_close($conn);

    // Redirect to tracking page
    header("Location: tracking.php");
    exit();
} else {
    die("Error inserting order: " . $stmt->error);
}

?>
