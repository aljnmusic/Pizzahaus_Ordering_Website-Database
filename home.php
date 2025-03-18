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
                        <li><a href="tracking.php">📦 Order Tracking</a></li>
                        <li><a href="special.php">🔥 Special Offers</a></li>
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
                    <li class="px-2"><a href="menu.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🍕 Menu / Order Now</a></li>
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

    <main class="flex-grow bg-base-100 overflow-auto">
        <!-- <img src="img/front.jpg" alt=""> -->
        <div class="p-4 text-center lg:pt-6">
            <h1 class="text-2xl font-bold text-sans lg:text-4xl">🍕Welcome to Pizza Haus!🍕</h1>
            <p class="text-lg dancing-script-uniquifier lg:text-3xl lg:pt-1">Savor the best pizzas in town!</p>
        </div>

        <div class="p-4 text-center lg:pb-0">
            <p class="text-lg lg:text-2xl font-bold italic">🔥 Featured Categories 🔥</p>
        </div>

        <div class="p-4 flex flex-col gap-2 lg:mx-16 lg:gap-6">

            <div class="card bg-base-100 w-90 shadow-xl border" style="background-image: url('img/hamcheese.png');">
                <div class="card-body">
                    <h2 class="card-title dancing-script-uniquifier">Classic Pizzas🍕</h2>
                        <div class="card-actions justify-end">
                            <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                        </div>
                </div>
            </div>

            <div class="card bg-base-100 w-90 shadow-xl border bg-image " style="background-image: url('img/alohabaconcheeseburger.png');">
                <div class="card-body">
                    <h2 class="card-title dancing-script-uniquifier">Premium Pizzas🧀</h2>
                        <div class="card-actions justify-end">
                            <button class="btn btn-accent"><a href="menu.php">Order Now</a></button>
                        </div>
                </div>
            </div>

            <div class="card bg-base-100 w-90 shadow-xl border bg-image" style="background-image: url('img/hawaiian.png');">
                <div class="card-body">
                    <h2 class="card-title dancing-script-uniquifier">Combo Deals🍽️</h2>
                        <div class="card-actions justify-end">
                            <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                        </div>
                </div>
            </div>

            <div class="card bg-base-100 w-90 shadow-xl border bg-image bg-no-repeat bg-right lg:bg-center bg-contain" style="background-image: url('img/pepsidrinks.png');">
                <div class="card-body">
                    <h2 class="card-title dancing-script-uniquifier">Sides & Drinks🥤</h2>
                        <div class="card-actions justify-end">
                            <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                        </div>
                </div>
            </div>

        </div>
        

        <div class="lg:grid lg:grid-cols-2 lg:px-32">
            <div>
                <div class="p-4 text-center lg:mt-6 lg:pb-0">
                    <p class="text-2xl font-bold text-sans">🎉 Special Offers</p>
                </div>

                <div class="p-4 lg:pb-0 lg:mx-16 lg:flex lg:justify-center lg:items-center">
                    <div class="card bg-base-100 w-90 lg:w-full shadow-xl border bg-image bg-no-repeat bg-left bg-contain" style="background-image: url('img/buy1.gif');">
                        <div class="card-body">
                            <h2 class="card-title dancing-script-uniquifier text-right">Limited time only!</h2>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 lg:mx-16 lg:flex lg:justify-center lg:items-center">
                    <div class="card bg-base-100 w-90 lg:w-full shadow-xl border bg-image bg-no-repeat bg-left bg-contain" style="background-image: url('img/discount.gif');">
                        <div class="card-body">
                            <h2 class="card-title dancing-script-uniquifier text-right">Enjoy great deals!</h2>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="p-4 text-center lg:pb-0 lg:mt-6">
                        <p class="text-2xl font-bold text-sans">📢 Why Choose Us?</p>
                    </div>

                    <div class="p-4 lg:mx-16 lg:flex lg:justify-center lg:items-center lg:pb-4 lg:pt-5  lg:mb-0">
                        <div class="card bg-base-100 w-90 lg:w-full lg:h-96 shadow-xl border bg-image bg-no-repeat bg-left bg-contain" style="background-image: url('img/groundhog-day.gif');">
                            <div class="card-body text-center">
                                <h2 class="card-title dancing-script-uniquifier text-right">Fresh, fast, <br> and affordable !</h2>
                                    <div class="card-actions justify-end">
                                        <button class="btn btn-accent"><a href="menu.php">Order Now!</a></button>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="p-4 text-center lg:mt-6">
                        <p class="text-2xl font-bold text-sans">🔎Browse our menu <br class="block lg:hidden"> and order now!🚀</p>
                        <button class="btn btn-accent btn-wide mt-2"><a href="menu.php">Menu / Order Now</a></button>
        </div>

        <footer class="footer bg-accent items-center p-4">
            <aside class="grid-flow-col items-center text-center bg-accent text-stone-950 text-sm lg:text-md">
                <p>Copyright © 2025 - All right reserved Pizza Haus</p>
            </aside>
        </footer>
    </main>
</body>
</html>