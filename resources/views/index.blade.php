<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Susscode | Home</title>
</head>
<body class="dark:bg-gray-700">
    <nav class="border-b bg-green-500 dark:border-gray-600 dark:bg-transparent">
        <div class="flex justify-between items-center px-5 md:px-12 lg:px-24 py-2">
            <div class="flex items-center">
                <img src="{{ asset('images/logopng.png') }}" class="w-12 h-14 rounded md:w-12" alt="logo">
            </div>
        </div>
    </nav>
    <header>
        <div class="text-center py-10 md:py-20 px-5">
            <h3 class="text-3xl md:text-4xl lg:text-5xl my-3 md:my-5 text-gray-500 dark:text-gray-300">We write the</h3>
            <h2 class="text-6xl md:text-7xl lg:text-8xl my-3 md:my-5 text-gray-600 dark:text-gray-100 font-play">Susscode</h2>
            <h3 class="text-3xl md:text-4xl lg:text-5xl my-3 md:my-5 text-green-500">You have a Software!</h3>
            <img src="{{ asset('images/susscoder.jpg') }}" class="w-full md:w-1/3 mx-auto my-10 rounded shadow-lg" alt="developer">
        </div>
    </header>
</body>
</html>
