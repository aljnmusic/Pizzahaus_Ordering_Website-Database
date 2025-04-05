<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = new mysqli($db_server, $db_user, $db_password, $db_name, 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT order_id, customer_id, order_date, total_amount, order_status, payment_status from orders order by order_date DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table class='table-auto w-full border-collapse border border-gray-300'>";
    echo "<thead class='bg-green-300 sticky z-1 top-0'><tr><th>Order ID</th><th>Customer ID</th><th>Order Date</th><th>Total Amount</th><th>Order Status</th><th>Payment Status</th></tr></thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()){
        echo "<tr class='border border-gray-300 hover:bg-gray-100 text-center'>";
        echo "<td>" . $row["order_id"] . "</td>";
        echo "<td>" . $row["customer_id"] . "</td>";
        echo "<td>" . $row["order_date"] . "</td>";
        echo "<td>" . $row["total_amount"] . "</td>";
        echo "<td>" . $row["order_status"] . "</td>";
        echo "<td>" . $row["payment_status"] . "</td>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No order found";
}

$conn->close();
?>