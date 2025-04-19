<?php
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'pizzahaus';
$port = 3307;

$conn = new mysqli($host, $user, $password, $database, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setTitle('Sales Report');

$row = 1;

function writeSection($conn, $sql, $title, &$sheet, &$row) {
    $sheet->setCellValue("A{$row}", $title);
    $row++;
    $sheet->setCellValue("A{$row}", 'Period');
    $sheet->setCellValue("B{$row}", 'Total Sales');
    $row++;

    $result = $conn->query($sql);
    while ($data = $result->fetch_assoc()) {
        $sheet->setCellValue("A{$row}", $data['period']);
        $sheet->setCellValue("B{$row}", $data['total_sales']);
        $row++;
    }

    // Add one empty row to separate sections
    $row++;
}

$sql_daily = "SELECT DATE(order_date) as period, SUM(total_amount) as total_sales
              FROM orders
              WHERE order_status = 'Completed'
              GROUP BY DATE(order_date)
              ORDER BY DATE(order_date) DESC";
writeSection($conn, $sql_daily, "Daily Sales Report", $sheet, $row);

$sql_weekly = "SELECT CONCAT(YEAR(order_date), '-Week ', WEEK(order_date)) as period, SUM(total_amount) as total_sales
               FROM orders
               WHERE order_status = 'Completed'
               GROUP BY YEAR(order_date), WEEK(order_date)
               ORDER BY YEAR(order_date) DESC, WEEK(order_date) DESC";
writeSection($conn, $sql_weekly, "Weekly Sales Report", $sheet, $row);

$sql_monthly = "SELECT CONCAT(YEAR(order_date), '-', LPAD(MONTH(order_date), 2, '0')) as period, SUM(total_amount) as total_sales
                FROM orders
                WHERE order_status = 'Completed'
                GROUP BY YEAR(order_date), MONTH(order_date)
                ORDER BY YEAR(order_date) DESC, MONTH(order_date) DESC";
writeSection($conn, $sql_monthly, "Monthly Sales Report", $sheet, $row);

$filename = "Sales_Report_" . date('Y-m-d') . ".xlsx";
ob_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
?>
