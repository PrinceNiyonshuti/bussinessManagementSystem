<x-layout>
    <!-- hero section -->
    <section class="bg-gray-200">
        <div class="flex justify-center">
            <div class="px-20 py-32 lg:w-1/2">
                <div class="w-full ">
                    <h1 class="mb-2 text-4xl font-medium text-gray-900">Welcome to Business Management System
                    </h1>
                    <div class="leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus
                        hic, iure vel commodi voluptatibus, tenetur ipsum.</div>
                    <button class="px-8 py-2 mt-4 text-xl text-white hover:shadow-2xl bg-gradient-to-b from-indigo-300 to-indigo-500 rounded-xl">Get
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
                <div class="w-24 border-b-4 border-indigo-400"></div>
            </div>
            <p class="mt-4 text-gray-600 ">Duis aute irure dolor in reprehenderit in voluptate
                velit esse
                cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia
                deserunt mollit anim id est laborum.</p>

            <img class="object-cover object-fill w-full mt-16 rounded-md shadow h-80" src="bg.png">
        </div>
    </section>


    <!-- company section -->
    <section class="container mx-auto mt-20" id="company">
        <div class="flex flex-col items-center justify-center mb-12">
            <h2 class="text-3xl font-semibold text-gray-800">Company we work with </h2>
            <div class="w-24 border-b-4 border-indigo-400"></div>
        </div>
        <div class="grid gap-2 md:grid-cols-4">

            @foreach ($companies as $company)
            <div class="relative mx-6">
                <div class="bg-white rounded-lg shadow-md">
                    <img src="storage/{{ $company->logo }}" class="w-full rounded-t-lg object-cover h-48 ">
                    <div class="absolute bottom-32 right-4 text-white bg-indigo-500 px-2 py-0.5 rounded-xl">
                        {{ $company->address }}
                    </div>
                    <div class="p-6 content-center">
                        <h2 class="mb-2 text-2xl font-medium text-gray-800">{{ $company->name }}</h2>
                        <a href="/view/{{ $company->name }}" class="text-base text-indigo-600">Read More </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </section>



    <!-- Our Services -->
    <section>
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col items-center justify-center mb-12">
                <h3 class="text-3xl">Our Services</h3>
                <div class="w-24 border-b-4 border-indigo-400"></div>
            </div>
            <div class="flex flex-wrap m-4 text-center">
                <div class="w-full p-4 lg:w-1/3">
                    <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">1.2K</h2>
                        <p class="leading-relaxed">Service 2</p>
                    </div>
                </div>
                <div class="w-full p-4 lg:w-1/3">
                    <div class="px-4 py-6 border-2 border-gray-200 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-20 h-20 mb-3 text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h2 class="text-3xl font-medium text-gray-900 title-font">1.3K</h2>
                        <p class="leading-relaxed">Service 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
