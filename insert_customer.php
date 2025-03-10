<?php

session_start();

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["address"])) {
        die("Error: All fields are required!");
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $sql = "INSERT INTO customer (customer_name, email, phone, address) 
            VALUES ('$name', '$email', '$phone', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['customer_id'] = mysqli_insert_id($conn);
        header("Location: insert_order.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

}


mysqli_close($conn);

?>