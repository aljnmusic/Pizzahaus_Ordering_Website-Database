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
    <title>Home</title>
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
            
            <div class="dropdown relative">
                <div class="block lg:hidden">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow flex justify-center items-center absolute top-12">
                        <li><a href="menu.php">🍕 Menu / Order Now</a></li>
                        <li><a href="cart.php">🛒 Cart & Checkout</a></li>
                        <li><a href="">📦 Order Tracking</a></li>
                        <li><a>🔥 Special Offers</a></li>
                        <li><a href="contact.php">📞 Contact Us</a></li>
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
                                <span class="badge badge-sm indicator-item">0</span>
                            </div>
                        </div>
                        <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                            <div class="card-body">
                                <span class="text-lg font-bold">0 Items</span>
                                <span class="text-info">Subtotal: ₱0</span>
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
                    <li class="px-2"><a href="contact.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">✉️ Contact Us</a></li>
                    <li class="px-2"><a href="about.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🌐 About Us</a></li>
                    <li class="px-2"><a href="FAQ.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">❓ FAQ</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="flex-grow bg-base-100 overflow-auto">
        <!-- <img src="img/front.jpg" alt=""> -->
        <div class="p-4 text-center lg:pt-6">
            <h1 class="text-2xl font-bold text-sans lg:text-4xl">🎉 Special Offers 🎉</h1>
            <p class="text-lg dancing-script-uniquifier lg:text-3xl lg:pt-1">Enjoy our current special offers available for a limited time!</p>
        </div>

        <div class="w-full h-screen grid grid-cols-1 gap-3 mt-2 lg:w-1/2 mx-auto">
            
            <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mx-2">
                <a href="#">
                    <img class="p-0 rounded-t-lg w-32 h-32 object-cover" src="img/combo1a.png" alt="product image" />
                </a>
                <div class="px-4 w-full pb-2">
                        <a href="#">
                            <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center text-3xl">Comba A</h5><br>
                            <p class="text-mono text-center">Ham & Cheese & 1.25 Pepsi</p>
                        </a>
                        <div class="flex justify-center align-center pt-2">
                            <div class="card-actions justify-end m-0">
                                <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                            </div>
                        </div>
                </div>
            </div>

            <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow justify-center items-center mx-2 mb-2">
                <a href="#">
                    <img class="p-0 rounded-t-lg w-40 h-40 object-cover" src="img/combo2a.png" alt="product image" />
                </a>
                <div class="px-4 w-full pb-2">
                        <a href="#">
                            <h5 class="dancing-script-uniquifier text-xl font-semibold tracking-tight text-gray-900 dark:text-white text-center text-3xl">Combo B</h5><br>
                            <p class="text-mono text-center">Hawaiian Delight & Korean & 1.25 Pepsi</p>
                        </a>
                        <div class="flex justify-center align-center pt-2">
                            <div class="card-actions justify-end m-0">
                                <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                            </div>
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
</body>
</html>