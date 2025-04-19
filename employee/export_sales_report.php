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

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Sales Report');

$sheet->setCellValue('A1', 'Sales Report');
$sheet->mergeCells('A1:C1');
$sheet->setCellValue('A2', 'Period');
$sheet->setCellValue('B2', 'Total Sales');
$sheet->setCellValue('C2', 'Type');

$row = 3;

function exportSalesReport($conn, $sql, $type, &$sheet, &$row){
    $result = $conn->query($sql);
    if($result->num_rows > 0){

    }
};

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
