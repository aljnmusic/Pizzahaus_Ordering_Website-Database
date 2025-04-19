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
        while($data = $result->fetch_assoc()){
            $sheet->setCellValue("A$row", $data['Period']);
            $sheet->setCellvalue("B$row", number_format($data['Total Sales'], 2));
            $sheet->setCellValue("C$row", $type);
            $row++; 
        }
    } else {
        $sheet->setCellValue("A$row", "No sales data available for $type");
        $sheet->mergeCells("A$row:C$row");
        $row++;
    }
};

$sql_daily = "SELECT DATE(order_date) as Period, SUM(total_amount) as total_sales
              FROM orders
              WHERE order_status = 'Completed'
              GROUP BY DATE(order_date)
              ORDER BY DATE(order_date) DESC";

$writeSalesData($conn, $sql_daily, "Daily Sales", $sheet, $row);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
