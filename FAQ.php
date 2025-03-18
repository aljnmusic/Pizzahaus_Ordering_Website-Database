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
    <title>FAQ</title>
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

        .redtext{
            color: red;
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
                        <li><a>📦 Order Tracking</a></li>
                        <li><a>🔥 Special Offers</a></li>
                        <li><a href="contact.php">✉️ Contact Us</a></li>
                        <li><a href="about.php">ℹ About Us</a></li>
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
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="badge badge-sm indicator-item">8</span>
                            </div>
                        </div>
                        <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                            <div class="card-body">
                                <span class="text-lg font-bold">8 Items</span>
                                <span class="text-info">Subtotal: $999</span>
                                <div class="card-actions">
                                    <button class="btn btn-primary btn-block">View cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="w-full hidden lg:block flex flex-row">
                <ul class="flex flex-row gap-20 justify-center items-center">
                    <li class="px-2"><a href="home.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🏠 Home</a></li>
                    <li class="px-2"><a href="menu.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🍕 Menu / Order Now</a></li>
                    <li class="px-2"><a href="cart.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🛒 Cart & Checkout</a></li>
                    <li class="px-2"><a href="tracking.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">📦 Order Tracking</a></li>
                    <li class="px-2"><a href="special.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🔥 Special Offers</a></li>
                    <li class="px-2"><a href="contact.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">✉️ Contact Us</a></li>
                    <li class="px-2"><a href="about.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🌐 About Us</a></li>
                </ul>
            </div>

        </div>

    </header>

    <main class="flex-grow flex flex-col bg-base-100 overflow-auto w-full">

        <div class="p-4">
            <h2 class="text-3xl text-bold mt-2 text-center">
                ❓ FAQ ❓
            </h2>
            <p class="font-mono text-center text-sm mt-2 lg:text-xl lg:font-sans lg:italic lg:mx-2">Welcome to our FAQ section! We’ve compiled answers to the most common questions about ordering, delivery, payments, and promotions to make your experience smooth and hassle-free. Whether you’re curious about our menu, want to track an order, or need help with an issue, we’ve got you covered! If you can’t find the answer you’re looking for, feel free to contact us—we’re always happy to help! 😊</p>
        </div>

        <div class="w-full flex flex-col justify-center items-center gap-3 mt-5">
            <div class="collapse bg-accent w-80 rounded-box lg:w-3/4">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium text-center italic">🛒 Ordering & Payment 🛒
                </div>
                <div class="collapse-content lg:text-center">
                    <p class="font-bold">❓ How do I place an order?</p>
                    <p class="italic">💬 Choose your favorite pizzas, add them to your cart, and proceed to checkout.</p> <br>

                    <p class="font-bold">❓ What payment methods do you accept?</p>
                    <p class="italic">💬 We accept cash and Gcash payments.</p> <br>

                    <p class="font-bold">❓ Can I modify or cancel my order after placing it?</p>
                    <p class="italic">💬 Orders cannot be modified once confirmed, but contact us ASAP for urgent concerns.</p>
                </div>
            </div>

            <div class="collapse bg-accent w-80 rounded-box lg:w-3/4">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium text-center italic">📋 Menu & Customization 📋
                </div>
                <div class="collapse-content lg:text-center">
                    <p>❓ What types of pizzas do you offer?</p>
                    <p>💬 We have a variety of pizzas, including Classic, Premium, Thin Crust, and Best-Sellers, along with combo meals and sides.</p> <br>

                    <p>❓ Can I request half and half toppings?</p>
                    <p> 💬 Yes, you can request half and half toppings.</p> <br>

                    <p>❓ Do you have vegetarian or halal options?</p>
                    <p>💬 We currently do not have vegetarian or halal-certified options, but check our menu for available choices.</p> <br>

                    <p>❓ How do I place an order?</p>
                    <p>💬 Simply browse our menu, select your items, and place an order for pickup at our store.</p> <br>

                    <p>❓ Are there any ongoing promotions?</p>
                    <p>Yes! Check our Special Offers section for the latest deals and discounts.</p>
                </div>
            </div>

            <div class="collapse bg-accent w-80 rounded-box lg:w-3/4">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium text-center italic">🏷️ Promotions & Discounts 🏷️
                </div>
                <div class="collapse-content lg:text-center">
                    <p>❓ How do I avail of special offers?</p>
                    <p>💬 Ongoing promos are displayed on our homepage.</p> <br>

                    <p>❓ Do you offer student discounts?</p>
                    <p>💬 Not yet, but stay tuned for upcoming deals!</p> <br>

                    <p>❓ Is there a loyalty program?</p>
                    <p>💬 We’re working on one! Follow us for updates.</p>
                </div>
            </div>

            <div class="collapse bg-accent w-80 rounded-box lg:w-3/4">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium text-center italic">🤝 Customer Support 🤝
                </div>
                <div class="collapse-content lg:text-center">
                    <p>❓ What if I received the wrong order?</p>
                    <p>💬 Let us know immediately, and we’ll fix it ASAP!</p> <br>

                    <p>❓ What if my order is missing an item?</p>
                    <p>💬 Let us know, and we’ll provide the missing item or refund you.</p> <br>

                    <p>❓ How can I contact you?</p>
                    <p>💬 Reach us at 📞 0916-348-2693 or 📧 pizzahaus.naga@gmail.com.</p>
                </div>
            </div>

            <div class="collapse bg-accent w-80 rounded-box lg:w-3/4">
                <input type="checkbox" />
                <div class="collapse-title text-xl font-medium text-center italic">📦 Miscellaneous 📦
                </div>
                <div class="collapse-content lg:text-center">
                    <p>❓ Do you cater for parties or events?</p>
                    <p>💬 Yes! Message us for bulk orders and catering.</p> <br>

                    <p>❓ Do you have halal options?</p>
                    <p>💬 Some of our ingredients are halal-certified, but we don’t offer fully halal-certified pizzas yet.</p> <br>

                    <p>❓ Do you offer gluten-free pizzas?</p>
                    <p>💬 Not at the moment, but we are considering it!</p>
                </div>
            </div>

            <div class="p-4 mt-0">
            <div class="flex flex-row justify-center gap-20 mt-2">
                <a href="https://www.facebook.com/share/1EuULqSbSo/?mibextid=qi2Omg" target="_blank" rel="noopener noreferrer">
                    <img src="img/facebook.png" alt="Facebook" width="30" height="30">
                </a>
                <a href="https://www.instagram.com/pizzahausbicol?igsh=NmEzcmVodWs0MXg=" target="_blank" rel="noopener noreferrer">
                    <img src="img/instagram.png" alt="instagram" width="30" height="30">
                </a>
                <a href="https://www.instagram.com/yourprofile" target="_blank" rel="noopener noreferrer">
                    <img src="img/what.png" alt="whatsapp" width="30" height="30">
                </a>
            </div>
        </div>
        </div>
    </main>

    <footer class="footer bg-accent items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-accent text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer>
</body>
</html>