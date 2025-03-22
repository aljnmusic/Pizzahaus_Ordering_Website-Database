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
        <!-- <div class="flex items-center justify-between gap-2 w-full h-full p-0 flex-1 block">
            <div class="block lg:hidden">
                <div class="dropdown relative block">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow flex justify-center items-center absolute top-12">
                        <li><a href="home.php">🏠 Home</a></li>
                        <li><a href="menu.php">🍕 Menu / Order Now</a></li>
                        <li><a>📦 Order Tracking</a></li>
                        <li><a>🔥 Special Offers</a></li>
                        <li><a href="contact.php">✉️ Contact Us</a></li>
                        <li><a href="about.php">ℹ About Us</a></li>
                        <li><a href="FAQ.php">❓FAQ</a></li>
                    </ul>
                </div> 
            </div>

            <div class="block lg:hidden">
                <div class="flex-1 flex justify-center items-center">
                    <img src="img/logo1.png" alt="Logo" class="h-12">
                </div>
            </div>

            <div class="block lg:hidden">
                <div class="flex-none">
                    <img src="img/logo.png" alt="" class="h-9">
                </div>
            </div>

            <div class="w-full hidden lg:block flex flex-row">
                <ul class="flex flex-row gap-24 justify-center items-center">
                    <li class="px-2"><a href="home.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🏠 Home</a></li>
                    <li class="px-2"><a href="menu.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🍕 Menu / Order Now</a></li>
                    <li class="px-2"><a href="tracking.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">📦 Order Tracking</a></li>
                    <li class="px-2"><a href="special.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🔥 Special Offers</a></li>
                    <li class="px-2"><a href="contact.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">✉️ Contact Us</a></li>
                    <li class="px-2"><a href="about.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🌐 About Us</a></li>
                    <li class="px-2"><a href="FAQ.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">❓ FAQ</a></li>
                </ul>
            </div> -->

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


                <div class="flex flex-col flex-grow items-center justify-center">
                
                    <section id="view_orders" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">📋 View Orders</h2>
                    </section>

                    <section id="update_order_status" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">🔄 Update Order Status</h2>
                    </section>

                    <section id="order_details" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">📝 View Order Details</h2>
                    </section>

                    <section id="employee_info" class="hidden-section">
                        <h2 class="text-2xl font-semibold mb-4">📍 Employee Info</h2>
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