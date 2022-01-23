<x-layout>
    <div class="flex h-screen">
        <x-sideBar />
        <div class="w-full px-4 py-2 bg-gray-200 lg:w-full">
            <div class="container mx-auto mt-5">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Updating Company Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>
                                <div class="flex-shrink-0 w-40 h40">
                                    <label class="block text-sm mb-2">Recent Company Logo</label>
                                    <img class="w-40 h40 rounded" src="/storage/{{ $company->logo }}" alt="admin dashboard ui">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/company/{{ $company->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <span>
                                            <label class="block text-sm mb-2">Company Name</label>
                                            <input type="text" id="name" name="name" value="{{ $company->name}}" placeholder="Enter Company Name" required class="mb-2 mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('name')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Company Address</label>
                                            <input type="text" id="address" name="address" value="{{ $company->address}}" placeholder="Enter Company Address" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('address')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Company Telephone Number</label>
                                            <input type="text" id="telephone" name="telephone" value="{{ $company->telephone}}" placeholder="Enter Company Telephone Number" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('telephone')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Company Website</label>
                                            <input type="text" id="website" name="website" value="{{ $company->website}}" placeholder="Enter Company Website" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('website')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Company Director</label>
                                            <input type="text" id="director" name="director" value="{{ $company->director}}" placeholder="Enter Company Director" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('director')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Company Logo</label>
                                            <input type="file" id="logo" name="logo" value="{{ $company->logo}}" class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('logo')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Update Company
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
