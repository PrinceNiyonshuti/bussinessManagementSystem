<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bussinessmanagementsystem</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>

    <header class="bg-white" x-data="{ isOpen: false }">
        <nav class="container px-8 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-gray-900 md:text-2xl" href="/">Logo</a>

                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                @auth
                <a class="{{ request()->is('dashboard') ? 'text-indigo-400' : 'text-gray-800 transform hover:text-indigo-400' }}" href="/dashboard">Dashboard</a>
                <a class="px-4 py-2 text-center text-white border bg-gradient-to-b from-indigo-300 to-indigo-500 rounded-2xl hover:shadow-xl" href="#" @click.prevent="document.querySelector('#logout-form').submit()">Log out</a>
                <form id="logout-form" method="POST" action="/logout" class="hidden">
                    @csrf
                </form>
                @else
                <a class="text-gray-800 transform hover:text-indigo-400" href="#">Home</a>
                <a class="text-gray-800 transform hover:text-indigo-400" href="#about">About us</a>
                <a class="text-gray-800 transform hover:text-indigo-400" href="#company">Company</a>
                <a class="px-4 py-2 text-center text-white border bg-gradient-to-b from-indigo-300 to-indigo-500 rounded-2xl hover:shadow-xl" href="/login">Login</a>
                @endauth


            </div>
        </nav>
    </header>

    {{ $slot }}

    <!-- footer -->
    <footer class="text-white bg-gray-100">
        <div class="container flex items-center px-5 py-8 mx-auto ">
            <p class="text-sm text-black">
                @2022 <a href="#" class="ml-1 text-black" target="_blank">Zatec - Test</a>
            </p>
        </div>
    </footer>

</body>

</html>
