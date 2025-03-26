<style>
    .sales-report-section {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: flex-start;
        width: 100%;
        padding: 8px;
    }

    .sales-report-table {
        border-collapse: collapse;
        width: 100%;
        /* border: 1px solid black; */
        margin-bottom: 16px;
    }

    .sales-report-table th, .sales-report-table td {
        padding: 8px;
        text-align: left;
    }

    .sales-report-table tr:hover {
        background-color: #f5f5f5; /* Light gray background on hover */
    }   

    .sales-report-title {
        font-weight: bold;
        text-align: left;
        padding: 8px;
        background-color: #f0f0f0;
    }
</style>

<div class="sales-report-section">
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

function displaySalesReport($result, $title) {
    echo "<table class='sales-report-table'>";
    echo "<tr><td colspan='2' class='sales-report-title'>$title</td></tr>";
    echo "<tr><th>Period</th><th>Total Sales</th></tr>";
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["period"] . "</td>";
            echo "<td>" . number_format($row["total_sales"], 2) . "</td>";
            echo "</tr>";
        }
    } else{
        echo "<tr><td colspan='2'>No sales data available for $title</td></tr>";
    }
    echo "</table>";
}

$sql_daily = "SELECT DATE(order_date) as period, SUM(total_amount) as total_sales
              FROM orders
              WHERE order_status = 'Completed'
              GROUP BY DATE(order_date)
              ORDER BY DATE(order_date) DESC";

$result_daily = $conn->query($sql_daily);
displaySalesReport($result_daily, "Daily Sales");

$sql_weekly = "SELECT CONCAT(YEAR(order_date), '-Week ', WEEK(order_date)) as period, SUM(total_amount) as total_sales
               FROM orders
               WHERE order_status = 'Completed'
               GROUP BY YEAR(order_date), WEEK(order_date)
               ORDER BY YEAR(order_date) DESC, WEEK(order_date) DESC";

$result_weekly = $conn->query($sql_weekly);
displaySalesReport($result_weekly, "Weekly Sales");

$sql_monthly = "SELECT CONCAT(YEAR(order_date), '-', MONTH(order_date)) as period, SUM(total_amount) as total_sales
                FROM orders
                WHERE order_status = 'Completed'
                GROUP BY YEAR(order_date), MONTH(order_date)
                ORDER BY YEAR(order_date) DESC, MONTH(order_date) DESC";

$result_monthly = $conn->query($sql_monthly);
displaySalesReport($result_monthly, "Monthly Sales");


?>

</div>