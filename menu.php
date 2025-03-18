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
    <title>Menu</title>
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
                        <li><a href="cart.php">🛒 Cart & Checkout</a></li>
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
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span id="cart-count" class="badge badge-sm indicator-item">0</span>
                            </div>
                        </div>
                        <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                            <div class="card-body">
                                <span id="cart-item-count" class="text-lg font-bold">0 Items</span>
                                <span id="cart-total" class="text-info">Subtotal: ₱0</span>
                                <div class="card-actions">
                                    <button class="btn btn-primary btn-block"><a href="cart.php">View cart</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full hidden lg:block flex flex-row">
                <ul class="flex flex-row gap-24 justify-center items-center">
                    <li class="px-2"><a href="home.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🏠 Home</a></li>
                    <li class="px-2"><a href="cart.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🛒 Cart & Checkout</a></li>
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
        <div class="p-4">
            <h2 class="text-3xl text-bold mt-2 text-center">
            📝 Menu 📝
            </h2>
            <p class="font-mono text-center text-sm mt-2">Explore our delicious selection of pizzas, from classic favorites to premium gourmet flavors, plus combo meals and tasty sides to complete your feast. 🍕🔥</p>
        </div>
        
        <!-- Original -->
        <div class="flex flex-col items-center justify-center">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">💯 Original (Thick Crust) 💯</p>
        </div>
        <div class="flex flex-col items-center justify-center">
        <p class="font-mono text-center text-sm">10 Inches. Good for 3-4 person. 8 Slices</p>
        </div>

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">

            <div class="text-center flex flex-col">

                <div>
                    <h3 class="dancing-script-uniquifier text-2xl text-bold">Classic</h3>
                </div>

            <!--  -->
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/hamcheese.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Ham & Cheese</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱135</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Ham & Cheese" data-price="135">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/hawaiian.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Hawaiian</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱135</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Hawaiian" data-price="135">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/peperoni.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Peperoni</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱135</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Peperoni" data-price="135">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


            <!--  -->
            </div>
            
            <div class="text-center flex flex-col">

                <div>
                    <h3 class="dancing-script-uniquifier text-2xl text-bold">Supreme</h3>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2 ">
                    <a href="#">
                        <img class="p-0 rounded-t-lg h-32 w-32" src="img/overload2.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Overload</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱170</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Overload" data-price="170">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/porkfloss.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Porkfloss</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Porkfloss" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/pizzahausspecial.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Pizzahuas Special</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱200</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Pizzahuas Special" data-price="200">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- premium -->
        <div class="flex flex-col items-center justify-center mt-4">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">💎 Premium (Thick Crust) 💎</p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="font-mono text-center text-sm">10 Inches. Good for 3-4 person. 8 Slices</p>
        </div>

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/beefmushroom.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Beef & Mushroom</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Beef & Mushroom" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div> 
                
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/crabgarlic.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Crab & Garlic</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Crab & Garlic" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/chinesesausage1.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Chinese Sausage</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Chinese Sausage" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/tunacorn.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Tuna & Corn</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Tuna & Corn" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/bacon.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Bacon</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Bacon" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/sisig.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Sisig</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Sisig" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

        </div>

        <div class="flex flex-col bg-white justify-center items-center mr-2">
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow w-1/2 justify-center items-center ml-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/cheeseburger.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Cheese Burger</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱160</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Cheese Burger" data-price="160">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>
        </div>


<!-- thin crust -->
        <div class="flex flex-col items-center justify-center mt-4">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">🚀 Thin Crust 🚀</p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="font-mono text-center text-sm">12 Inches. Good for 4-5 person. 12 Slices</p>
        </div>

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/beefmushroom.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Beef & Mushroom</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱210</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Beef & Mushroom" data-price="210">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/beefteriyaki.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Beef Teriyaki</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱230</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Beef Teriyaki" data-price="230">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/crabbycorn.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Craby Corn</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱210</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Craby Corn" data-price="210">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/chickenpoppers.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Chicken Poppers</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱230</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Chicken Poppers" data-price="230">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32 object-cover" src="img/lakreta.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Lakreta</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱210</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Lakreta" data-price="210">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/meatydeluxe.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Meaty Deluxe</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱240</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Meaty Deluxe" data-price="240">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>
        </div>

        <!-- thin crust bestseller -->
        <div class="flex flex-col items-center justify-center mt-4">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">🔥 Thin Crust Bestseller 🔥</p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="font-mono text-center text-sm">12 Inches. Good for 4-5 person. 12 Slices</p>
        </div>

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/hawaiiandelight.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Hawaiian Delight</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱190</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Hawaiian Delight" data-price="190">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div> 
                
                
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/alohabaconcheeseburger.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Aloha Bacon <br> Cheese Burger</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱230</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Aloha Bacon Cheese Burger" data-price="230">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>                        


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/peperoni.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Peperoni</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱190</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Peperoni" data-price="190">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/korean.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Korean</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱240</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Korean" data-price="240">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

        </div>

        <!-- Combo -->
        <div class="flex flex-col items-center justify-center mt-4">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">✨ Special Combo ✨</p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="font-mono text-center text-sm">Bestseller Combo</p>
        </div>

        

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">
            
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32 object-cover" src="img/combo1a.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Comba A</h5><br>
                                <p class="text-mono text-center">Ham & Cheese <br> 1.25 Pepsi</p>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱195</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Combo A" data-price="195">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32 object-cover" src="img/combo2a.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Combo B</h5><br>
                                <p class="text-mono text-center">Hawaiian Delight & Korean & 1.25 Pepsi</p>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱490</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Combo B" data-price="490">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>
        </div>


        <!-- Drinks -->
        <div class="flex flex-col items-center justify-center mt-4">
            <p class="dancing-script-uniquifier text-3xl text-bold mt-2 text-center">🥤 Drinks 🥤</p>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="font-mono text-center text-sm">Cold beverages for your thirst</p>
        </div>

        <div class="w-full h-screen grid grid-cols-2 gap-3 mt-2">

                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center ml-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/mineralwata.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Mineral Water</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱20</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Mineral Water" data-price="20">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>


                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mr-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/c2solo.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">C2 Solo</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱25</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="C2 Solo" data-price="25">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>

        </div>
        
        <div class="flex flex-col bg-white justify-center items-center mr-2 mb-2">
                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow w-1/2 justify-center items-center ml-2 mt-2">
                    <a href="#">
                        <img class="p-0 rounded-t-lg w-32 h-32" src="img/pepsidrinks.png" alt="product image" />
                    </a>
                    <div class="px-4 w-full pb-2">
                            <a href="#">
                                <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center">Pepsi</h5>
                            </a>
                            <div class="flex items-center justify-between pt-2">
                                <span class="text-2xl font-bold text-gray-900 dark:text-white">₱25</span>
                                <button class="button">
                                    <!-- <span class="label rounded bg-accent">Add to card</span>
                                    <span class="gradient-container">
                                    <span class="gradient"></span>
                                    </span> -->

                                    <button class="bg-accent p-2 inline-block rounded-lg mx-2 add-to-cart" data-name="Pepsi" data-price="25">
                                        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" class="w-4" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                        <style type="text/css">
                                        .st0 {
                                        fill: #fff;
                                        }
                                        </style>
                                        <path class="st0" d="M16.2,17.4c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3s1.3-0.6,1.3-1.3c0,0,0,0,0,0
                                        C17.5,18,17,17.4,16.2,17.4z M7,17.4c-0.7,0-1.3,0.6-1.3,1.3S6.3,20,7,20s1.3-0.6,1.3-1.3l0,0C8.3,18,7.7,17.4,7,17.4z M19.8,4.7
                                        c-0.2-0.2-0.4-0.3-0.6-0.3L5,3.7l-0.9-3C4,0.3,3.6,0,3.2,0H0.9C0.4,0,0,0.4,0,0.9s0.4,0.9,0.9,0.9h1.6l3.1,10.7l-1,3.1
                                        c-0.1,0.3,0,0.6,0.1,0.8c0.2,0.2,0.4,0.4,0.7,0.4h12.3c0.5,0,0.9-0.4,0.9-0.9c0-0.5-0.4-0.9-0.9-0.9l0,0h-11l0.5-1.6l11.2-1.4
                                        c0.4-0.1,0.7-0.4,0.8-0.8L20,5.4C20,5.1,20,4.9,19.8,4.7z" />
                                        </svg>
                                </button>
                            </div>
                    </div>
                </div>
        </div>

        <footer class="footer bg-accent items-center p-4">
            <aside class="grid-flow-col items-center text-center bg-accent text-stone-950 text-sm lg:text-md">
                <p>Copyright © 2025 - All right reserved Pizza Haus</p>
            </aside>
        </footer>
    </main>

    <script>
    // Initialize cart from localStorage
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Update cart display when page loads
    updateCartDisplay();

    // Add event listener to all "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function () {
            let itemName = this.getAttribute('data-name');
            let itemPrice = parseInt(this.getAttribute('data-price'));

            // Check if item already exists in cart
            let existingItem = cart.find(item => item.name === itemName);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name: itemName, price: itemPrice, quantity: 1 });
            }

            // Save to localStorage
            localStorage.setItem("cart", JSON.stringify(cart));

            // Update cart UI
            updateCartDisplay();
        });
    });

    // Function to update cart UI
    function updateCartDisplay() {
        let cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);
        let cartTotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);

        document.getElementById('cart-count').textContent = cartCount;
        document.getElementById('cart-item-count').textContent = `${cartCount} Items`;
        document.getElementById('cart-total').textContent = `Subtotal: ₱${cartTotal}`;
    }
</script>

</body>
</html>