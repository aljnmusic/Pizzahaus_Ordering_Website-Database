<?php
session_start();
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

        .submit-button {
            width: 45.5%; /* or any specific width */
            padding: 10px 20px; /* adjust as needed */
    /* Add any other styles that the submit button has */
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
                        <li><a href="tracking.php">📦 Order Tracking</a></li>
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
            </div>

        </div>
    </header>

    <main class="flex-grow flex flex-col bg-base-100 overflow-auto w-full">
        <h1 class="text-2xl font-bold mb-4 text-center dancing-script-uniquifier mt-4">🛒 Your Cart 🛒</h1>

        <!-- <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-accent">
                    <th class="border p-2 italic">Item</th>
                    <th class="border p-2 italic">Price</th>
                    <th class="border p-2 italic">Quantity</th>
                    <th class="border p-2 italic">Total</th>
                    <th class="border p-2 italic">Actions</th>
                </tr>
            </thead>
            <tbody id="cart-items"></tbody>
        </table> -->

        <div class="flex flex-col items-center justify-center mx-3">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-green-300">
                        <th class="border p-2 italic">Item</th>
                        <th class="border p-2 italic">Price</th>
                        <th class="border p-2 italic">Quantity</th>
                        <th class="border p-2 italic">Total</th>
                        <th class="border p-2 italic">Actions</th>
                    </tr>
                </thead>
                <tbody id="cart-items"></tbody>
            </table>
        </div>

        <div class="flex flex-col items-center justify-center mx-3">
            <form id="checkout_form" action="insert_customer.php" method="POST">
                <input type="text" name="name" placeholder="Name" class="input input-bordered input-accent w-full  mt-4" id="name-input" required />
                <input type="email" name="email" placeholder="Email" class="input input-bordered input-accent w-full mt-4" id="email-input" required />
                <input type="number" name="phone" placeholder="Phone number" class="input input-bordered input-accent w-full mt-4" id="phone-input" required />
                <input type="text" name="address" placeholder="Address" class="input input-bordered input-accent w-full mt-4" id="address-input" required />

                <!-- <button onclick="modal.showModal()" type="submit" class="btn btn-primary w-full mt-4">Submit Order</button> -->

                <div class="mt-4 text-lg flex flex-col items-center justify-center">
                    <strong>Grand Total: <span id="final-total" name="total">₱0</span></strong>
                </div>

                <input type="hidden" name="total_amount" id="total-amount-input">

                <div class="flex flex-col items-center justify-center mx-0 mt-4 w-full">
                    <div class="form-control w-full max-w-xs lg:max-w-lg">
                        <p class="text-center dancing-script-uniquifier text-xl lg:text-2xl">Select a payment method:</p>
                        <select id="payment-method" class="select select-bordered w-full max-w-xs lg:max-w-lg mt-2">
                            <option value="cash">Cash</option>
                            <option value="gcash">Gcash</option>
                            <option value="maya">Maya</option>
                        </select>
                    </div>
                </div>
<!-- 
        <button onclick="modal.showModal()" class="mt-4 mb-2 bg-green-300 text-white px-4 py-2 rounded hover:bg-green-500 mx-3" >Place Order</button> -->

                <input type="hidden" name="cart_data" id="cart-data">
                <button onclick="modal.showModal()" type="submit" name="order_submitted" class="btn btn-primary w-full mt-4">Submit Order</button>
                <!-- <button onclick="clearCart()" class="mt-4 mb-4 bg-red-500 w-full text-white px-4 py-2 rounded hover:bg-red-600 ">Clear Cart</button> -->

                <!-- <dialog onclick="modal.close()" id="modal" class="p-6 bg-white rounded-lg shadow-lg w-full left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="flex justify-between items-center mb-4 text-center">
                        <h2 class="text-xl font-bold">Thank you for your order!🎉</h2>
                        <button onclick="modal.close()" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                    </div>
                    <div>
                        Your order has been successfully placed! To track the status of your order, click this link ➡ <a href="tracking.php" class="text-blue-600 hover:underline">Order Tracking</a>
                </dialog> -->
                
            </form>

            <button onclick="clearCart()" class="mt-4 mb-4 bg-red-500 lg:w-1/2 w-full text-white px-4 py-2 rounded hover:bg-red-600 submit-button">Clear Cart</button>
        </div>


    </main>

    <footer class="footer bg-accent items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-accent text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer>
    

    <script>

        const cartItemsContainer = document.getElementById("cart-items");
        const finalTotal = document.getElementById("final-total");

        // Load cart from localStorage
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        // Function to display cart items
        function displayCart() {
            cartItemsContainer.innerHTML = "";
            let totalPrice = 0;

            cart.forEach((item, index) => {
                let row = document.createElement("tr");
                row.innerHTML = `
                    <td class="border p-0 italic text-center">${item.name}</td>
                    <td class="border p-0 text-center">₱${item.price}</td>
                    <td class="border p-0 flex items-center justify-center">
                        <button class="bg-gray-300 px-1" onclick="updateQuantity(${index}, -1)">➖</button>
                        <span class="px-2">${item.quantity}</span>
                        <button class="bg-gray-300 px-1" onclick="updateQuantity(${index}, 1)">➕</button>
                    </td>
                    <td class="border p-0 text-center">₱${item.price * item.quantity}</td>
                    <td class="border p-0 flex items-center justify-center">
                        <button class="bg-red-500 text-white px-1" onclick="removeItem(${index})">❌</button>
                    </td>
                `;
                cartItemsContainer.appendChild(row);
                totalPrice += item.price * item.quantity;
            });

            finalTotal.textContent = `₱${totalPrice}`;

            // document.getElementById("total-amount-input").value = totalPrice;

            document.addEventListener("DOMContentLoaded", function () {
                let cart = localStorage.getItem("cart") || "[]";
                document.getElementById("cart-data").value = cart;
                
                let totalAmount = 0;
                let cartItems = JSON.parse(cart);
                cartItems.forEach(item => {
                    totalAmount += item.price * item.quantity;
                });

                document.getElementById("total-amount-input").value = totalAmount;
            });
            
        }

        // Function to update quantity
        function updateQuantity(index, change) {
            cart[index].quantity += change;
            if (cart[index].quantity <= 0) {
                cart.splice(index, 1);
            }
            localStorage.setItem("cart", JSON.stringify(cart));
            displayCart();
        }

        // Function to remove item from cart
        function removeItem(index) {
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            displayCart();
        }

        // Function to clear the cart
        function clearCart() {
            localStorage.removeItem("cart");
            cart = [];
            displayCart();
        }

        // Load cart items on page load
        displayCart();
        
        document.getElementById('checkout_form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission to handle it manually

    // Extract email from form
    var customerEmail = document.getElementById('email-input').value;

    // Send the email notification immediately
    sendEmailNotification(customerEmail);

    // Submit the form after sending the email
    this.submit();
});

function sendEmailNotification(email) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "sendemail.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send("customer_email=" + encodeURIComponent(email));
}
    </script>
    
</body>
</html>
