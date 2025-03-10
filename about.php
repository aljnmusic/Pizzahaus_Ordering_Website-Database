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
    <title>About Us</title>

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
                    <div class="dropdown relative">
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
                            <li><a href="contact.php">📞 Contact Us</a></li>
                            <li><a href="FAQ.php">❓FAQ</a></li>
                        </ul>
                    </div>
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
                    <li class="px-2"><a>🔥 Special Offers</a></li>
                    <li class="px-2"><a href="contact.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">✉️ Contact Us</a></li>
                    <li class="px-2"><a href="FAQ.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">❓ FAQ</a></li>
                </ul>
            </div>

        </div>

    </header>

    <main class="flex-grow bg-base-100 overflow-auto w-full lg:justify-center lg:items-center lg:flex lg:flex-col">
        <div class="flex flex flex-col mt-2 lg:justify-center lg:mt-96 lg:pt-72">
            <img src="img/mainlogo.png" alt="" class="h-40 w-40 mx-auto">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:hidden">🍕 About Us 🍕</h1>
        </div>

        <div class="flex flex flex-col mt-2 hidden lg:block lg:justify-center lg:items-center lg:flex">
        <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">🛈 About Us 🛈</h1>
        </div>

        <div class="p-4 lg:pt-1 lg:w-3/4">
            <p class="text-sm font-bold text-center font-mono lg:text-sans lg:italic lg:text-lg lg:font-normal">PizzaHaus is owned by Dorothy and Edison. The enterprising couple came from 3rd generation of bread shop owners. In 2014, the couple began to think of innovative ways to increase their income. Relying on their regular bread line was not sufficient to survive. Edison chanced upon a pizza cart. He realized that it would be a great addition to their own bakeshop. Thus, the couple began to experiment and sought feedback from family and friends. Edison intensely experimented with dough preparation while Dorothy searched for the excellent pizza sauce and toppings. By January 2015, the first take-out counter near BMC Hospital opened. Three months after, another branch opened in Panganiban Drive. The couple now has grown to 21 company-owned stores in the Bicol Region.</p>
        </div>

        <div class="mt-2 p-4 lg:flex lg:justify-center lg:items-center lg:flex-col lg:mx-10 lg:mt-10">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">🎯 Purpose 🎯</h1>
            <p class="text-sm font-bold text-center font-mono mt-2 lg:text-lg lg:italic lg:font-mono lg:font-normal">To provide our customers with affordable and delicious foods without sacrificing the quality and taste.</p>
        </div>

        <div class="mt-2 p-4 lg:flex lg:justify-center lg:items-center lg:flex-col lg:mx-10 lg:pb-0 lg:mt-0 lg:w-3/4 lg:mt-10">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">🚀 Mission 🚀</h1>
            <p class="text-sm font-bold text-center font-mono mt-2 lg:text-lg lg:italic lg:font-mono lg:font-normal">To build long-term relationships with our customers and provide exceptional customer services by pursuing business through innovation and advanced technology.
            To provide employment and opportunity for a better standard of living to our employees.</p>
        </div>

        <div class="mt-2 p-4 lg:flex lg:justify-center lg:items-center lg:flex-col lg:mx-10 lg:w-3/4 lg:mt-10">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">🔭 Vision 🔭</h1>
            <p class="text-sm font-bold text-center font-mono mt-2 lg:text-lg lg:italic lg:font-mono lg:font-normal">To provide quality products exceeding the expectations of our customers.
            To become the top of mind for a place, go to pizza of every family.</p>
        </div>

        <div class="mt-2 p-4 lg:flex lg:justify-center lg:items-center lg:flex-col lg:mx-10 lg:mt-10">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">💎 Core Values 💎</h1>
            <p class="text-sm font-bold text-center font-mono mt-2 lg:text-lg lg:italic lg:font-mono lg:font-normal">We treat our stakeholders with respect through business ethics, integrity, creativity, and innovation.</p>
        </div>

        <div class="mt-2 p-4 lg:flex lg:justify-center lg:items-center lg:flex-col lg:mx-10 lg:mt-10">
            <h1 class="text-4xl font-bold text-sans text-center dancing-script-uniquifier lg:text-5xl">🏆 Goals 🏆</h1>
            <p class="text-sm font-bold text-center font-mono mt-2 lg:text-lg lg:italic lg:font-mono lg:font-normal">Regional Expansion builds a good reputation for every family and becomes a key player in the food industry market.</p>
        </div>
    </main>

    <footer class="footer bg-accent items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-accent text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer>
</body>
</html>