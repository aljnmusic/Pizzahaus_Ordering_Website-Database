<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "pizzahaus";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name, 3307);

if($conn){
    echo "You are connected John";
}
else{
    echo "cant connect";
}


?>