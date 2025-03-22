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
    <title>Login</title>

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
<body class="h-screen flex justify-center align-center flex-col bg-slate-500">

    <header class="navbar bg-blue-400 text-center p-0 flex justify-center align-center">
            <div class="block lg:hidden">
                <div class="flex-none">
                    <img src="img/emlogo.png" alt="" class="h-9 w-full">
                </div>
            </div>
    </header>

    <main class="flex-grow flex flex-col justify-center align-center     bg-base-100 overflow-auto w-full">
        <div class="flex justify-center align-center">
            <div class="relative w-full mx-2 rounded max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
                <div class="w-full">
                    <div class="text-center">
                        <h1 class="text-3xl font-semibold text-gray-900">Sign in</h1>
                        <p class="mt-2 text-gray-500">Sign in below to access your account</p>
                    </div>
                    <div class="mt-5">
                        <form action="loginauth.php" method="POST">
                            <div class="relative mt-6">
                                <input type="email" name="username" id="username" placeholder="Username" class="peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" autocomplete="NA" />
                                <label for="email" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Username</label>
                            </div>
                            <div class="relative mt-6">
                                <input type="password" name="password" id="password" placeholder="Password" class="peer peer mt-1 w-full border-b-2 border-gray-300 px-0 py-1 placeholder:text-transparent focus:border-gray-500 focus:outline-none" />
                                <label for="password" class="pointer-events-none absolute top-0 left-0 origin-left -translate-y-1/2 transform text-sm text-gray-800 opacity-75 transition-all duration-100 ease-in-out peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:top-0 peer-focus:pl-0 peer-focus:text-sm peer-focus:text-gray-800">Password</label>
                            </div>
                            <div class="my-6">
                                <button type="submit" class="w-full rounded-md bg-blue-400 px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Sign in</button>
                            </div>
                            <p class="text-center text-sm text-gray-500">Don&#x27;t have an account yet? <br>
                                <a href="#!"
                                    class="font-semibold text-gray-600 hover:underline focus:text-gray-800 focus:outline-none">Contact Your Admin.
                                </a>.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer bg-blue-400 items-center p-4">
        <aside class="grid-flow-col items-center text-center bg-blue-400 text-stone-950">
            <p>Copyright © 2025 - All right reserved Pizza Haus</p>
        </aside>
    </footer>
</body>
</html>