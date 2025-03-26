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

$sql = "SELECT product_id, name, category, price FROM product";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "<style>
    .table-container {
        margin-top: 50px; /* Add margin to ensure header is not hidden */
        width: 100%;
        max-height: 600px; /* Set a maximum height for the container */
        overflow-y: auto; /* Enable vertical scrolling */
    }

    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #d1fae5; /* Light green background */
        z-index: 1;
    }
    </style>";

    echo "<div class='table-container'>";
    echo "<table class='table-auto w-full border-collapse border border-gray-300'>";
    echo "<thead class='sticky-header'><tr><th>Product ID</th><th>Name</th><th>Category</th><th>Price</th></tr></thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()){
        echo "<tr class='border border-gray-300 hover:bg-gray-100 text-center'>";
        echo "<td>" . $row["product_id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "No order found";
}

$conn->close();
?>