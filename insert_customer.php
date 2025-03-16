<?php

session_start();

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["address"])) {
        die("Error: All fields are required!");
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $_SESSION["total_amount"] = $_POST["total_amount"] ?? 0;

    $_SESSION['cart_data'] = isset($_POST["cart_data"]) ? $_POST["cart_data"] : "{}";

    $sql = "INSERT INTO customer (customer_name, email, phone, address) 
            VALUES ('$name', '$email', '$phone', '$address')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION["customer_id"] = mysqli_insert_id($conn);

        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // exit();

        header("Location: insert_order.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") 
// {
//     // print_r($_POST); // Debugging - Check if total_amount is received
//     // exit();

//     if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["address"])) {
//         die("Error: All fields are required!");
//     }

//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];
//     $address = $_POST["address"];

//     // $total_amount = $_POST['total_amount'] ?? 0;
//     $_SESSION['total_amount'] = $_POST['total_amount'] ?? 0;
//     // echo "Session Total Amount: " . $_SESSION['total_amount']; // Debugging - Confirm session value
//     // exit();

//     $sql = "INSERT INTO customer (customer_name, email, phone, address) 
//             VALUES ('$name', '$email', '$phone', '$address')";
    
//     if ($conn->query($sql) === TRUE) {
//         $_SESSION['customer_id'] = mysqli_insert_id($conn);
//         header("Location: insert_order.php");
//         exit();
//     } else {
//         echo "Error: " . $conn->error;
//     }

// }


mysqli_close($conn);

?>