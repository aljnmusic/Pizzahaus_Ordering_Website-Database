<?php
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'pizzahaus';
$port = '3307';

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
            order_item.order_item_id, 
            order_item.order_id, 
            order_item.product_id, 
            order_item.quantity, 
            product.name AS product_name, 
            customer.customer_name
        FROM order_item
        JOIN product ON order_item.product_id = product.product_id
        JOIN orders ON order_item.order_id = orders.order_id
        JOIN customer ON orders.customer_id = customer.customer_id
        ORDER BY orders.order_date DESC";
$result = $conn->query($sql);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Order Item ID');
$sheet->setCellValue('B1', 'Order ID');
$sheet->setCellValue('C1', 'Product ID');
$sheet->setCellValue('D1', 'Customer Name');
$sheet->setCellValue('E1', 'Product Name');
$sheet->setCellValue('F1', 'Quantity');

$row = 2;
while ($data = $result->fetch_assoc()) {
    $sheet->setCellValue("A$row", $data['order_item_id']);
    $sheet->setCellValue("B$row", $data['order_id']);
    $sheet->setCellValue("C$row", $data['product_id']);
    $sheet->setCellValue("D$row", $data['customer_name']);
    $sheet->setCellValue("E$row", $data['product_name']);
    $sheet->setCellValue("F$row", $data['quantity']);
    $row++;
}

$filename = "PizzaHaus_Orders_Details" . date('Y-m-d') . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
