<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Susscode | Home</title>
</head>
<body class="bg-gray-100 dark:bg-gray-700">
    @include('sweetalert::alert')
    <nav class="border-b bg-green-500 dark:border-gray-600 dark:bg-gray-700">
        <div class="flex justify-between items-center px-5 md:px-12 lg:px-24 py-2">
            <div class="flex items-center">
                <img src="{{ asset('images/logopng.png') }}" class="w-12 h-14 rounded md:w-12" alt="logo">
            </div>
            <a href="#contact-us" class="text-yellow-500 hover:text-yellow-400">Contact Us</a>
        </div>
    </nav>
    <header class="flex justify-center items-center" style="background: linear-gradient(to bottom, rgba(15, 15, 15, 0.65), rgba(15, 15, 15, 0.65)), url('images/susscoder.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 70vh;">
        <div class="text-center py-10 md:py-20 px-5">
            <div class="animate__animated animate__backInLeft">
                <h3 class="text-3xl md:text-4xl lg:text-5xl my-3 md:my-5 text-gray-500 dark:text-gray-300">We write the</h3>
                <h2 class="text-6xl md:text-7xl lg:text-8xl my-3 md:my-5 text-gray-600 dark:text-gray-100 font-play">Susscode</h2>
                <h3 class="text-3xl md:text-4xl lg:text-5xl my-3 md:my-5 text-green-500">You own the Software!</h3>
            </div>
            {{--<img src="{{ asset('images/susscoder.jpg') }}" class="w-full md:w-1/3 mx-auto my-10 rounded shadow-lg animate__animated animate__backInRight" alt="developer">--}}
        </div>
    </header>
    <section class="px-10 py-20 bg-white dark:bg-gray-400 text-center">
        <h3 class="text-3xl md:text-4xl lg:text-5xl text-center text-yellow-400">What We Do</h3>
        <p class="py-3 w-full md:w-2/3 lg:w-1/3 text-2xl font-thin mx-auto dark:text-gray-100">We find a problem and curate the solution. Modern day problems
            require modern day solutions and Susscode is the home of modern day Software solutions.
        </p>
    </section>
    <section class="p-10" style="background: rgba(0, 0, 0, 0.3)" id="contact-us">
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
    <footer>
        <div class="text-center bg-gray-300 dark:bg-gray-900 p-5">
            <p class="text-gray-600 dark:text-gray-500">&copy; {{ date("Y") }} Susscode. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
