<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}

$role = $_SESSION["role"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.12.0/dist/full.css" rel="stylesheet">
    <link rel="icon" href="img/employee.png" type="image/x-icon">
    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .dancing-script-uniquifier {
            font-family: "Dancing Script", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .hidden-section {
            display: none;
        }

        .hidden-section:target {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body class="h-screen flex flex-col">
<header class="navbar bg-blue-400 text-center p-0 flex flex-row justify-center align center w-full">

            <div class="flex flex-row justify-between w-3/4">
            <h2 class="text-2xl font-semibold text-center">👨‍💼 Employee Dashboard</h2>
            <p class="text-xl font-semibold font-sans italic">👋 Welcome <?php echo $_SESSION["name"]; ?></p>
            <p class="text-xl font-semibold font-sans">🔰 Role: <?php echo $_SESSION["role"]; ?></p>
            </div>
        </div>
    </header>

    <main class="flex-grow flex flex-col bg-base-100 overflow-auto w-full overflow-hidden">
        <?php if ($role == "cashier"): ?>
            <div class="flex flex-row">
                <div class="w-72 h-screen bg-gray-100 flex flex-row justify-start align-center relative">
                    <ul class="flex flex-col w-full mt-4 text-xl font-mono font-semibold relative">
                        <li class="hover:bg-gray-300 p-2"><a href="#view_orders">📋 View Orders</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#update_order_status">🔄 Update Order Status</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#order_details">📝 View Order Details</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#employee_info">📍 Employee Info</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="login.php">🚪 Logout</a></li>
                    </ul>
                </div>


                <div class="flex flex-col flex-grow">
<!-- 
                    <section id="dashboard" class="h-screen w-full flex flex-col justify-center align-center">
                        <div class="flex justify-center align-center">
                            <h2 class="text-5xl font-semibold mb-4 h-24">👨‍💼 Welcome to your Employee Dashboard</h2>
                        </div>
                    </section> -->
                
                    <section id="view_orders" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4 mt-4">📋 View Orders</h2>

                        <div id="orders-container" class="w-full h-full flex flex-row justify-center align-center items-center flex-wrap overflow-auto gap-4 p-4">
                            <?php include "display_orders.php"; ?>
                        </div>
                    </section>

                    <section id="update_order_status" class="hidden-section">
                        <h2 class="text-5xl font-semibold mb-10">🔄 Update Order Status</h2>
                        <form action="update_order_status.php" method="POST" class="flex flex-col items-center border rounded-xl p-4 gap-4 w-1/2 mx-auto mb-4 mt-4 bg-blue-100">
                            <?php if(isset($_SESSION["message"])): ?>    
                                <div class="notification mb-4 p-2 border rounded bg-red-500 text-white">
                                <?php
                                echo $_SESSION["message"];
                                unset($_SESSION["message"]);
                                ?>
                                </div>
                            <?php endif; ?>

                            <label for="order_id" class="text-2xl mb-2">Order ID: </label>
                            <input type="text" id="order_id" name="order_id" class="mb-4 p-2 border rounded w-96 text-center" required>

                            <label for="status" class="text-2xl mb-2">New Status: </label>
                            <select name="status" id="status" class="mb-4 p-2 border rounded w-96" required>
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-96 mb-4">Update Status</button>
                        </form>
                    </section>

                    <section id="order_details" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4 mt-4">📝 View Order Details</h2>
                        <div id="order-details-container" class="w-full h-full flex flex-row justify-center align-center items-center flex-wrap overflow-auto gap-4 p-4">
                            <?php include "display_order_details.php"; ?>
                        </div>
                    </section>

                    <section id="employee_info" class="hidden-section w-full h-full">
                        <div class="flex flex-row w-full h-full">
                            <div class="w-1/2 flex justify-center align-center items-center">
                                <!-- <h2 class="text-2xl font-semibold mb-4">📍 Employee Info</h2> -->
                                <div class="rounded-2xl border-2 border-black w-3/4 mb-36">
                                    <img src="img/rey.png" alt="">
                                </div>
                            </div>

                            <div class="w-1/2 mx-10">
                                <h2 class="text-3xl font-semibold mb-4 mt-32">📍 Employee Details 📍</h2>
                                <div class="flex flex-col">
                                    <h3 class="text-2xl font-semibold mb-5">👤 Employee ID: <?php echo $_SESSION["employee_id"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📛 Full Name: <?php echo $_SESSION["name"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📧 Email: <?php echo $_SESSION["email"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📞 Phone Number: <?php echo $_SESSION["phone_number"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">🎭 Role: <?php echo $_SESSION["role"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📅 Date of Employment: <?php echo $_SESSION["hire_date"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">🥼 Employee Type: <?php echo $_SESSION["type"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📧 Employee Status: <?php echo $_SESSION["status"]; ?></h3>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>
        <?php endif; ?>
                                
        <?php if ($role == "Manager"): ?>
            <div class="flex flex-row">
                <div class="w-72 h-screen bg-gray-100 flex flex-row justify-start align-center relative">
                    <ul class="flex flex-col w-full mt-4 text-xl font-mono font-semibold relative">
                        <li class="hover:bg-gray-300 p-2"><a href="#view_orders">📋 View Orders</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#update_order_status">🔄 Update Order Status</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#order_details">📝 View Order Details</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#sales_report">📜 View Sales Report</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#product_list">🛒 View Product List</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#manage_products">🛒 Manage Products</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="#employee_info">📍 Manager Info</a></li>
                        <li class="mt-2 hover:bg-gray-300 p-2"><a href="login.php">🚪 Logout</a></li>
                    </ul>
                </div>


                <div class="flex flex-col flex-grow">
<!-- 
                    <section id="dashboard" class="h-screen w-full flex flex-col justify-center align-center">
                        <div class="flex justify-center align-center">
                            <h2 class="text-5xl font-semibold mb-4 h-24">👨‍💼 Welcome to your Employee Dashboard</h2>
                        </div>
                    </section> -->
                
                    <section id="view_orders" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4 mt-4">📋 View Orders</h2>

                        <div id="orders-container" class="w-full h-full flex flex-row justify-center align-center items-center flex-wrap overflow-auto gap-4 p-4">
                            <?php include "display_orders.php"; ?>
                        </div>
                    </section>

                    <section id="update_order_status" class="hidden-section">
                        <h2 class="text-5xl font-semibold mb-10">🔄 Update Order Status</h2>
                        <form action="update_order_status.php" method="POST" class="flex flex-col items-center border rounded-xl p-4 gap-4 w-1/2 mx-auto mb-4 mt-4 bg-blue-100">
                            <?php if(isset($_SESSION["message"])): ?>    
                                <div class="notification mb-4 p-2 border rounded bg-red-500 text-white">
                                <?php
                                echo $_SESSION["message"];
                                unset($_SESSION["message"]);
                                ?>
                                </div>
                            <?php endif; ?>

                            <label for="order_id" class="text-2xl mb-2">Order ID: </label>
                            <input type="text" id="order_id" name="order_id" class="mb-4 p-2 border rounded w-96 text-center" required>

                            <label for="status" class="text-2xl mb-2">New Status: </label>
                            <select name="status" id="status" class="mb-4 p-2 border rounded w-96" required>
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>

                            <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-96 mb-4">Update Status</button>
                        </form>
                    </section>

                    <section id="order_details" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4 mt-4">📝 View Order Details</h2>
                        <div id="order-details-container" class="w-full h-full flex flex-row justify-center align-center items-center flex-wrap overflow-auto gap-4 p-4">
                            <?php include "display_order_details.php"; ?>
                        </div>
                    </section>

                    <section id="sales_report" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4 mt-4">📜 View Sales Report</h2>
                        <div id="sales-report-container" class="w-full h-full flex flex-col justify-start align-center items-center flex-wrap overflow-auto gap-4 p-4">
                            <div class="w-full flex flex-row justify-center align-center items-center overflow-auto gap-4">
                                <?php include "display_sales_report.php"; ?>
                            </div>
                        </div>
                    </section>

                    <section id="product_list" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-0 mt-8">📜 View Product List</h2>
                        <div id="sales-report-container" class="w-full h-full flex flex-col justify-start align-center items-center flex-wrap overflow-auto gap-4 p-4 pt-0">
                            <div class="w-full flex flex-row justify-center align-center items-center overflow-auto gap-4">
                                <?php include "product_list.php"; ?>
                            </div>
                        </div>
                    </section>

                    <section id="manage_products" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-0 mt-16">🛒 Manage Products</h2>
                        <div id="manage-products-container" class="w-full h-full flex flex-col justify-start align-center items-center overflow-auto gap-4 p-4">
                                <form action="manage_products.php" method="POST" class="flex flex-col items-center border rounded-xl p-4 gap-4 w-full mx-auto mb-4 mt-2 bg-blue-100">
                                    <?php if(isset($_SESSION["product_message"])): ?>    
                                        <div class="notification mb-2 p-2 border rounded bg-red-500 text-white">
                                        <?php
                                        echo $_SESSION["product_message"];
                                        unset($_SESSION["product_message"]);
                                        ?>
                                        </div>
                                    <?php endif; ?>
                                    <label for="product_name" class="text-2xl mb-0">Product Name: </label>
                                    <input type="text" id="product_name" name="product_name" class="mb-2 p-2 border rounded w-96 text-center">

                                    <label for="product_id" class="text-2xl mb-0">Product ID: </label>
                                    <input type="text" id="product_id" name="product_id" class="mb-2 p-2 border rounded w-96 text-center">

                                    <label for="product_price" class="text-2xl mb-0">Product Price: </label>
                                    <input type="number" id="product_price" name="product_price" class="mb-2 p-2 border rounded w-96 text-center"></label>

                                    <label for="product_category" class="text-2xl mb-0">Product Category: </label>
                                    <input type="text" id="product_category" name="product_category" class="mb-2 p-2 border rounded w-96 text-center">

                                    <div class="grid grid-cols-3 gap-4">
                                    <button type="submit" name="action" value="add" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-96 mb-4">Add Product</button>
                                    <button type="submit" name="action" value="edit" class="bg-green-500 text-white p-2 rounded hover:bg-green-600 w-96 mb-4">Edit Product</button>
                                    <button type="submit" name="action" value="delete" class="bg-red-500 text-white p-2 rounded hover:bg-red-600 w-96 mb-4">Delete Product</button>
                                    </div>
                                </form>
                        </div>
                    </section>

                    <section id="employee_info" class="hidden-section w-full h-full">
                        <div class="flex flex-row w-full h-full">
                            <div class="w-1/2 flex justify-center align-center items-center">
                                <!-- <h2 class="text-2xl font-semibold mb-4">📍 Employee Info</h2> -->
                                <div class="rounded-2xl border-2 border-black w-3/4 mb-36">
                                    <img src="img/bor.png" alt="">
                                </div>
                            </div>

                            <div class="w-1/2 mx-10">
                                <h2 class="text-3xl font-semibold mb-4 mt-32">📍 Manager Details 📍</h2>
                                <div class="flex flex-col">
                                    <h3 class="text-2xl font-semibold mb-5">👤 Employee ID: <?php echo $_SESSION["employee_id"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📛 Full Name: <?php echo $_SESSION["name"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📧 Email: <?php echo $_SESSION["email"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📞 Phone Number: <?php echo $_SESSION["phone_number"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">🎭 Role: <?php echo $_SESSION["role"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📅 Date of Employment: <?php echo $_SESSION["hire_date"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">🥼 Employee Type: <?php echo $_SESSION["type"]; ?></h3>
                                    <h3 class="text-2xl font-semibold mb-5">📧 Employee Status: <?php echo $_SESSION["status"]; ?></h3>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>
        <?php endif; ?>
    </main>

    <!-- <footer class="footer bg-blue-400 items-center p-4">
            <aside class="grid-flow-col items-center text-center bg-blue-400 text-stone-950">
                <p>Copyright © 2025 - All right reserved Pizza Haus</p>
            </aside>
    </footer> -->

    <script>
    function fetchOrders() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "display_orders.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('orders-container').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    function fetchOrderDetails() {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "display_order_details.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('order-details-container').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    // Fetch orders every 30 seconds
    setInterval(fetchOrders, 30000);
    setInterval(fetchOrderDetails, 30000);

    // Initial fetch
    fetchOrders();
</script>
</body>
</html>