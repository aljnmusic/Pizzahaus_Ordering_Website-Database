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
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_id, name, category, price FROM product";
$result = $conn->query($sql);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Product ID');
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Category');
$sheet->setCellValue('D1', 'Price');

$row = 2;

while($data = $result->fetch_assoc()){
    $sheet->setCellValue("A$row", $data['product_id']);
    $sheet->setCellValue("B$row", $data['name']);
    $sheet->setCellValue("C$row", $data['category']);
    $sheet->setCellValue("D$row", $data['price']);
    $row++;
}


$filename = "PizzaHaus_Product_List" . date('Y-m-d') . ".xlsx";

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;


?>