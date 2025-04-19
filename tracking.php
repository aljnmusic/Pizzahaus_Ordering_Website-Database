<?php

session_start();

$totalPrice = $_SESSION['total_price'] ?? null;

$isFromCustomInsert = isset($_SESSION['selectedItems']) && !empty($_SESSION['selectedItems']);
$selectedItems = $_SESSION['selectedItems'] ?? [];
$totalPrice = $_SESSION['totalPrice'] ?? '0.00';

if(isset($_POST['selectedItems']) && isset($_POST['totalPrice'])){
    $selectedItems = json_decode($_POST['selectedItems'], true);
    $totalPrice = $_POST['totalPrice'];

    $_SESSION['selectedItems'] = $selectedItems;
    $_SESSION['totalPrice'] = $totalPrice;
} else {
    $selectedItems = isset($_SESSION['selectedItems']) ? $_SESSION['selectedItems'] : [];
    $totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : '0.00';
}

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
    <title>Cart</title>

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
    </style>
</head>
<body class="h-screen flex flex-col">
    <header class="navbar bg-accent text-center p-0">
        <div class="flex items-center justify-between gap-2 w-full h-full p-0 flex-1 block">
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
                        <li><a href="cart.php">🛒 Cart & Checkout</a></li>
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
                    <li class="px-2"><a href="cart.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🛒 Cart & Checkout</a></li>
                    <li class="px-2"><a href="special.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🔥 Special Offers</a></li>
                    <li class="px-2"><a href="contact.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">✉️ Contact Us</a></li>
                    <li class="px-2"><a href="about.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🌐 About Us</a></li>
                    <li class="px-2"><a href="FAQ.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">❓ FAQ</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="flex-grow flex flex-col bg-base-100 overflow-auto w-full">
        <div class="p-4 grid grid-cols-2 place-items-center w-full lg:flex lg:flex-col">
            <div class="card bg-base-100 w-52 h-52 bg-image bg-no-repeat bg-left bg-contain" style="background-image: url('img/thanks.gif');">
            </div>
            <div class="card-body text-center p-4 lg:p-0">
                    <h2 class="dancing-script-uniquifier text-center text-2xl mt-12 lg:text-5xl lg:mt-0">Thank you for placing your order! 🙏</h2>
            </div>
        </div>

    <?php
        date_default_timezone_set("Asia/Manila");
        $randomMinutes = rand(0, 10);
        $readyTime = date("h:i A", strtotime("+$randomMinutes minutes"));
    ?>

    <div class="bg-green-100 text-green-700 p-4 rounded-lg text-center mt-4 mx-2">
        <p class="text-lg font-semibold" id="status">⏳ Order Status:</p>
        <p class="text-xl font-bold" id="pickup">Your order will be ready by <span class="text-green-900" id="time">5:00</span></p>
    </div>

    <div class="mt-4 mx-2">
        <h2 class="text-lg font-bold text-center">📜 Regular Order Summary 📜</h2>
        <?php if (!$isFromCustomInsert): ?>
            <table class="table-auto w-full border-collapse border border-gray-300 mt-2">
                <thead>
                    <tr class="bg-green-300">
                        <th class="border p-2 italic">Item</th>
                        <th class="border p-2 italic">Price</th>
                        <th class="border p-2 italic">Quantity</th>
                        <th class="border p-2 italic">Total</th>
                    </tr>
                </thead>
                <tbody id="order-summary"></tbody>
            </table>
        <?php endif; ?>

        <div class="container mx-auto p-4">
            <div class="bg-green-100 p-4 rounded shadow flex flex-col items-center">
                <h1 class="text-lg font-bold text-center">📃 Special Customize Order Summary 📃</h1>
                <h2 class="text-lg font-semibold mb-2 ">Selected Items: </h2>
                <ul class="list-disc pl-5 text-xl font-mono flex flex-row gap-10 flex-wrap justify-center items-center" 
                    <?php foreach ($selectedItems as $item): ?>
                        <li><?php echo htmlspecialchars($item['name']); ?> - ₱<?php echo number_format($item['price'], 2); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="mt-4 text-lg font-semibold text-center ">  
                    <strong>Total Price: </strong>₱<?php echo number_format($totalPrice, 2); ?>
                </div>
            </div>
        </div>
    </div>

        <footer class="footer bg-accent items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-accent text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer>

    </main>

    <!-- <footer class="footer bg-accent items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-accent text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer> -->

    <script>
        function startTimer(duration, display){
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    display = document.querySelector('#status');
                    display.textContent = "🍕 Your order is ready! 🍕";
                    display = document.querySelector('#pickup');
                    display.textContent = "🎉 You now can pickup your order at the counter! 🎉";
                    localStorage.removeItem('timer');
                } else {
                    localStorage.setItem('timer', timer);
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * 1,
                display = document.querySelector('#time');
                display.textContent = "01:00";
            var storedTimer = localStorage.getItem('timer');
            if (storedTimer) {
                display.textContent = formatTime(parseInt(storedTimer, 10));
                startTimer(parseInt(storedTimer, 10), display);
            } else {
                startTimer(fiveMinutes, display);
            }

            displayOrderSummary();
        };

        function formatTime(seconds) {
        var minutes = parseInt(seconds / 60, 10);
        var remainingSeconds = parseInt(seconds % 60, 10);
        return (minutes < 10 ? "0" : "") + minutes + ":" + (remainingSeconds < 10 ? "0" : "") + remainingSeconds;
        }

        console.log(localStorage.getItem("cart"));

        function displayOrderSummary(){
            let cartData = localStorage.getItem("cart");

            if(!cartData){
                document.getElementById("order-summary").innerHTML = "";
                return;
            }

            let cart = JSON.parse(cartData);
            let summaryContainer = document.getElementById("order-summary");
            summaryContainer.innerHTML = "";
            let totalPrice = 0;

            cart.forEach((item, index) => {
                let row = document.createElement("tr");
                row.innerHTML = `
                    <td class="border p-2">${item.name}</td>
                    <td class="border p-2">₱${item.price}</td>
                    <td class="border p-2">${item.quantity}</td>
                    <td class="border p-2">₱${item.price * item.quantity}</td>
                `;
                summaryContainer.appendChild(row);
                totalPrice += item.price * item.quantity;
            });

            let totalRow = document.createElement("tr");
            totalRow.innerHTML = `
                <td colspan="3" class="border p-2 font-bold">Total:</td>
                <td class="border p-2 font-bold">₱${totalPrice}</td>
            `;
            summaryContainer.appendChild(totalRow);
        }

    </script>




    
</body>
</html>
