<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Management System</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>

    <header class="bg-white" x-data="{ isOpen: false }">
        <nav class="container px-8 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-gray-900 md:text-2xl" href="#">Logo</a>

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
                <a class="text-gray-800 transform hover:text-blue-400" href="#">Home</a>
                <a class="text-gray-800 transform hover:text-blue-400" href="#about">About us</a>
                <a class="text-gray-800 transform hover:text-blue-400" href="#company">Company</a>
                <a class="text-gray-800 transform hover:text-blue-400" href="#">Service</a>
                <a class="px-4 py-2 text-center text-white border bg-gradient-to-b from-blue-300 to-blue-500 rounded-2xl hover:shadow-xl" href="#">Login</a>
            </div>
        </nav>
    </header>

    <!-- hero section -->
    <section class="bg-gray-200">
        <div class="flex justify-center">
            <div class="px-20 py-32 lg:w-1/2">
                <div class="w-full ">
                    <h1 class="mb-2 text-4xl font-medium text-gray-900">Welcome to Bussiness Management System
                    </h1>
                    <div class="leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
                        hic, iure vel commodi voluptatibus, tenetur ipsum.</div>
                    <button class="px-8 py-2 mt-4 text-xl text-white hover:shadow-2xl bg-gradient-to-b from-blue-300 to-blue-500 rounded-xl">Get
                        started</button>
                </div>

            </div>
        </div>
    </section>

    <!-- about us -->
    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto text-center" id="about">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-3xl font-semibold text-gray-800">About Us</h2>
                <div class="w-24 border-b-4 border-blue-400"></div>
            </div>
            <p class="mt-4 text-gray-600 ">Duis aute irure dolor in reprehenderit in voluptate
                velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia
                deserunt mollit anim id est laborum.</p>

            <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80" src="https://source.unsplash.com/collection/190727/300x300">
        </div>
    </section>


    <!-- Blog section -->
    <section class="container mx-auto mt-20" id="company">
        <div class="flex flex-col items-center justify-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Company we work with</h2>
            <div class="w-24 border-b-4 border-blue-400"></div>
        </div>
        <div class="grid gap-2 md:grid-cols-4">
            <div class="relative mx-6">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg">
                    <div class="absolute bottom-32 right-4 text-white bg-blue-500 px-2 py-0.5 rounded-xl">
                        Category
                    </div>
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">Blog headline 1</h2>
                        <a href="#" class="text-base text-blue-600">Read More </a>
                    </div>
                </div>
            </div>
            <div class="relative mx-6">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg">
                    <div class="absolute bottom-32 right-4 text-white bg-blue-500 px-2 py-0.5 rounded-xl">
                        Category
                    </div>
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">Blog headline 2</h2>
                        <a href="#" class="text-base text-blue-600">Read More </a>
                    </div>
                </div>
            </div>
            <div class="relative mx-6">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg">
                    <div class="absolute bottom-32 right-4 text-white bg-blue-500 px-2 py-0.5 rounded-xl">
                        Category
                    </div>
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">Blog headline 3</h2>
                        <a href="#" class="text-base text-blue-600">Read More </a>

                    </div>
                </div>
            </div>
            <div class="relative mx-6">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="https://source.unsplash.com/collection/190727/300x300" class="w-full rounded-t-lg">
                    <div class="absolute bottom-32 right-4 text-white bg-blue-500 px-2 py-0.5 rounded-xl">
                        Category
                    </div>
                    <div class="p-6">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">Blog headline 4</h2>
                        <a href="#" class="text-base text-blue-600">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our Services -->
    <section>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col items-center justify-center mb-12">
                <h3 class="text-3xl">Our Services</h3>
                <div class="w-24 border-b-4 border-blue-400"></div>
            </div>
            <div class="flex flex-wrap m-4 text-center">
                <div class="w-full p-4 lg:w-1/3">
                    <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">1.K</h2>
                        <p class="leading-relaxed">Service 1</p>
                    </div>
                </div>
                <div class="w-full p-4 lg:w-1/3">
                    <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">1.2K</h2>
                        <p class="leading-relaxed">Service 2</p>
                    </div>
                </div>
                <div class="w-full p-4 lg:w-1/3">
                    <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">1.3K</h2>
                        <p class="leading-relaxed">Service 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-10 py-32 bg-gray-200">
        <div class="p-10 mx-auto bg-white rounded-lg shadow md:w-3/4 lg:w-1/2">
            <h3 class="text-2xl font-bold text-center">Form</h3>
            <form action="">
                <div class="lg:flex">
                    <div class="pr-1 mt-2 lg:w-1/2">
                        <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name">
                    </div>
                    <div class="pr-1 mt-2 lg:ml-2 lg:w-1/2">
                        <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you Email">
                        <p class="mt-1 ml-4 text-sm text-red-400">Email field is required!</p>
                    </div>
                </div>
                <div class="block pr-1 mt-2">
                    <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name">
                </div>
                <div>
                    <textarea name="message" cols="10" rows="3" placeholder="message" class="w-full p-3 mt-3 border border-gray-300 shadow rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="px-8 py-2 text-white bg-blue-400 rounded-xl">Submit</button>
                </div>

            </form>
        </div>
    </section>

    <!-- footer -->
    <footer class="text-white bg-gray-100">
        <div class="container flex items-center px-5 py-8 mx-auto ">
            <p class="text-sm text-black">
                @
                2021 Any —
                <a href="#" class="ml-1 text-black" target="_blank">Zatec - Test</a>
            </p>
        </div>
    </footer>

</body>

</html>
