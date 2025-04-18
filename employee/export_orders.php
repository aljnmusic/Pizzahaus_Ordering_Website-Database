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

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT order_id, customer_id, order_date, total_amount, order_status, payment_status FROM orders";
$result = $conn->query($sql);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Order ID');
$sheet->setCellValue('B1', 'Customer ID');
$sheet->setCellValue('C1', 'Order Date');
$sheet->setCellValue('D1', 'Total Amount');
$sheet->setCellValue('E1', 'Order Status');
$sheet->setCellValue('F1', 'Payment Status');

$row = 2;
while($data = $result->fetch_assoc()){
    $sheet->setCellValue("A$row", $data['order_id']);
    $sheet->setCellValue("B$row", $data['customer_id']);
    $sheet->setCellValue("C$row", $data['order_date']);
    $sheet->setCellValue("D$row", $data['total_amount']);
    $sheet->setCellValue("E$row", $data['order_status']);
    $sheet->setCellValue("F$row", $data['payment_status']);
    $row++;
}

$filename = "PizzaHaus_Orders_" . date('Y-m-d') . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;


?>