<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if($conn->connect_error){
    echo "Connection failed: " . $conn->connect_error;
}

$sql = "SELECT product_id, name, category, price FROM product";
$result = $conn->query($sql);

$products = [];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $products[] = $row;
    }
}

$discounts = [
    'Original (Classic Thick Crust)' => 0.10,
    'Premium (Thick Crust)' => 0.15,
    'Thin Crust' => 0.10,
    'Thin Crust Bestsellers' => 0.20,
    'Drinks' => 0.10
];

foreach ($products as &$item) {
    $category = $item['category'];
    if (isset($discounts[$category])) {
        $discount = $discounts[$category];
        $item['discounted_price'] = $item['price'] * (1 - $discount);
    } else {
        $item['discounted_price'] = $item['price'];
    }
}

unset($item);

$conn->close();

foreach($products as $item){
    echo "<div class='w-full'>";
    echo "<div class='product hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out p-4 rounded-lg shadow-lg font-sans font-semibold' data-name='{$item['name']}' data-price='{$item['discounted_price']}'>";
    echo "<h2>{$item['name']}</h2>";
    echo "<p>Category: {$item['category']}</p>";
    echo "<p>Price: ₱" . number_format($item['price'], 2) . "</p>";
    echo "<p>Discounted Price: ₱" . number_format($item['discounted_price'], 2) . "</p>";
    echo "</div>";
    echo "</div>";
}


?>