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
    <title>Contact Us</title>
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

            <div class="dropdown relative">
                <div class="block lg:hidden">
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
                    <li class="px-2"><a href="about.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">🌐 About Us</a></li>
                    <li class="px-2"><a href="FAQ.php" class="dancing-script-uniquifier text-xl lg:hover:bg-transparent lg:hover:text-base-100 lg:rounded-8xl lg:p-2 lg:hover:scale-105 lg:transition-all lg:duration-300 lg:ease-in lg:delay-100">❓ FAQ</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="flex-grow bg-base-100 overflow-auto w-full lg:grid lg:grid-cols-2 lg:flex lg:flex-row lg:justify-center lg:items-center">
        <div>
            <div class="p-4">
                <h1 class="dancing-script-uniquifier redtext text-3xl text-center lg:text-4xl">
                    get in touch
                </h1>
                <h2 class="text-3xl text-bold mt-2 text-center lg:text-5xl lg:italic">
                    📞 Contact Us 📞
                </h2>
                <p class="dancing-script-uniquifier text-center lg:text-lg lg:mt-2 lg:font-bold">With great prices, excellent service, and some of the best food you’ll ever have…Pizza Haus.</p>
            </div>

            <div class="p-4 flex flex-col gap-2 justify-center items-center">
                <input type="text" placeholder="Name" class="input input-bordered input-accent w-full max-w-xs lg:max-w-xl" />
                <input type="email" placeholder="email" class="input input-bordered input-accent w-full max-w-xs lg:max-w-xl" />
                <textarea class="textarea textarea-accent w-full max-w-xs h-32 lg:max-w-xl" placeholder="Message"></textarea>
                <button class="btn btn-accent w-full max-w-xs lg:max-w-xl">Submit</button>
            </div>

            <div class="p-4">
                <h1 class="text-xl text-bold text-center lg:italic">
                    📱 Get in touch through our socials 📱
                </h1>
                <div class="flex flex-row justify-center gap-2 mt-2 lg:mt-2 lg:gap-10">
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

        <!-- <div class="relative w-full h-96">
    <iframe class="absolute top-0 left-0 w-full h-full"
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d969.0991878196066!2d123.4895971453685!3d13.69440396470176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1739977964292!5m2!1sen!2sph"
        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</div> -->

        <div>
            <div class="hidden lg:p-2 lg:block lg:mt-6 lg:pb-0">
                <p class="dancing-script-uniquifier text-3xl text-center lg:text-3xl redtext">📍 Our Store Location 📍</p>
            </div>

            <div class="w-full flex flex-col justify-center items-center p-4 lg:p-0 lg:mt-8">
                <div class="w-92 lg:w-3/4 h-96"> <!-- Use Tailwind classes for styling -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d969.0991878196066!2d123.4895971453685!3d13.69440396470176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1739977964292!5m2!1sen!2sph"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg shadow-lg"
                        ></iframe>
                </div>
            </div>

            <div class="p-4">
                <div class="text-center flex flex-col gap-2 justify-center items-center text-md text-bold font-mono">
                    <p>📍 Bagumbayan Pequeño, Rizal St., Goa Camarines Sur 📍</p>
                    <p>📞 0916-348-2693 📞</p>
                    <p>🕔 Monday to Friday 8:00 am - 4:00 pm 🕔</p>
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