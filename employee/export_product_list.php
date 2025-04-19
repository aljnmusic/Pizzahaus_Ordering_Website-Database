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


?>