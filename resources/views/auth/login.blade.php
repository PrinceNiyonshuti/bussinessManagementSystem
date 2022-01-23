<x-layout>
    <div class="flex items-center min-h-screen bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="/bg.png" alt="Bussiness MS App Background" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 data-test="loginHeader" class="mb-4 text-2xl font-bold text-center text-gray-700">
                            Login
                        </h1>
                        <form method="POST" action="/login">
                            @csrf
                            <div>
                                <label class="block text-sm">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Enter your E-mail" required />
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block mt-4 text-sm">Password</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder=" **************** " required />
                                @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                                Log in
                            </button>
                        </form>
                        <p class="mt-4">
                            Need an account ? &nbsp;
                            <a href="#" class="text-sm text-blue-600 hover:underline">
                                Register
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
