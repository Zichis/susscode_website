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
            <h3 class="text-3xl md:text-4xl lg:text-5xl my-3 md:my-5 text-green-500">You own the Software!</h3>
            <img src="{{ asset('images/susscoder.jpg') }}" class="w-full md:w-1/3 mx-auto my-10 rounded shadow-lg" alt="developer">
        </div>
    </header>
    <section class="p-10" style="background: rgba(0, 0, 0, 0.3)">
        <h3 class="text-3xl md:text-4xl lg:text-5xl text-center text-gray-100">Contact Us</h3>
        <div class="my-10 md:flex">
            <div class="text-white md:text-left md:w-1/2">
                <p class="mb-2">Tel: +234 810 899 0031</p>
                <p class="mb-2">Email: info@susscode.com</p>
            </div>
            <form action="{{ route('contact-us') }}" method="POST" class="md:text-left md:w-1/2">
                @csrf
                <div class="mb-3">
                    <label class="text-yellow-300" for="name">Name</label>
                    <input class="w-full px-2 py-1 rounded" type="text" name="name" id="name" placeholder="Enter your name" required>
                    @error('name')
                        <p class="text-red-400 my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-yellow-300" for="name">Email</label>
                    <input class="w-full px-2 py-1 rounded" type="email" name="email" id="email" placeholder="Enter your email" required>
                    @error('email')
                        <p class="text-red-400 my-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="text-yellow-300" for="name">Message</label>
                    <textarea class="w-full px-2 py-1 rounded" name="message" id="message" rows="5" placeholder="Enter your message" required></textarea>
                    @error('message')
                        <p class="text-red-400 my-1">{{ $message }}</p>
                    @enderror
                </div>
                <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-400" type="submit">Send</button>
            </form>
        </div>
    </section>
</body>
</html>
