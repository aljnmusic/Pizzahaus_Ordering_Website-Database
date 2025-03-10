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
    <title>Pizzahaus</title>

  <style>
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    h1, p{
      text-shadow: 2px 2px 5px black;
    }

    .dancing-script-uniquifier {
            font-family: "Dancing Script", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
    }
  </style>

</head>
<body class="h-screen w-full flex items-center justify-center flex-col">
  <div class="relative h-full w-full flex items-center justify-center flex-col gap-5">
    <img src="img/front.jpg" alt="background image" class="absolute inset-0 h-full w-full object-cover z-0">
      <div class="relative z-10 flex items-center justify-center w-full">
        <h1 class="text-4xl text-white font-sans font-bold">Taste of Heaven!</h1>
      </div>
      <div class="relative z-10 flex items-center justify-center w-25 text-center">
        <p class="text-xl text-white dancing-script-uniquifier">Great day starts with great food, <br> grab a slice and change your mood.</p>
      </div>
      <a href="home.php">
        <button class="btn btn-accent relative z-10 flex items-center justify-center w-50">Get Started</button>
      </a>
  </div>
</body>
</html>