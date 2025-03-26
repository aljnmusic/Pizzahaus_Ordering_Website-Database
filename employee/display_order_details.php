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

$sql = "SELECT order_item.order_item_id, order_item.order_id, order_item.product_id, order_item.quantity, product.name, customer.customer_name
        from order_item
        join product on order_item.product_id = product.product_id
        join orders on order_item.order_id = orders.order_id
        join customer on orders.customer_id = customer.customer_id
        ORDER BY orders.order_date DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<table class='table-auto w-full border-collapse border border-gray-300'>";
    echo "<thead class='bg-green-300 sticky z-1 top-0'><tr><th>Order Item ID</th><th>Order ID</th><th>Product ID</th><th>Customer Name</th><th>Product Name</th><th>Quantity</th></tr></thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()){
        echo "<tr class='border border-gray-300 hover:bg-gray-100 text-center'>";
        echo "<td>" . $row["order_item_id"] . "</td>";
        echo "<td>" . $row["order_id"] . "</td>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["customer_name"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";

    }

    echo "</tbody>";
    echo "</table>";
}

else{
    echo "0 results";
}

$conn->close();

?>