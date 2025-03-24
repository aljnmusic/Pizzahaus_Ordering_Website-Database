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
    <link rel="icon" href="img/favi.png" type="image/x-icon">
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
        <?php if ($role = "cashier"): ?>
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
                        <h2 class="text-2xl font-semibold mb-4">📋 View Orders</h2>
                    </section>

                    <section id="update_order_status" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">🔄 Update Order Status</h2>
                    </section>

                    <section id="order_details" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">📝 View Order Details</h2>
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
        
        <?php if ($role = "Manager"): ?>

        <?php endif; ?>
    </main>

    <footer class="footer bg-blue-400 items-center p-4">
            <aside class="grid-flow-col items-center text-center bg-blue-400 text-stone-950">
                <p>Copyright © 2025 - All right reserved Pizza Haus</p>
            </aside>
    </footer>
</body>
</html>