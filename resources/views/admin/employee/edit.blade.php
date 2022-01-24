<x-layout>
    <div class="flex h-screen">
        <x-sideBar />
        <div class="w-full px-4 py-2 bg-gray-200 lg:w-full">
            <div class="container mx-auto mt-5">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Updating Employee Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Please Fill information careful .
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/employee/{{ $employee->id }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <span>
                                            <label class="block text-sm mb-2">Assigned Company </label>
                                            <select name="company_id" id="company_id" class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600">

                                                @foreach (\App\Models\Company::all() as $company)
                                                <option value="{{ $company->id }}" {{ old('company_id',$employee->company_id == $company->id ? 'selected' : '') }}>{{ ucwords($company->name) }}</option>
                                                @endforeach

                                            </select>
                                            @error('company_id')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Employee Name</label>
                                            <input type="text" id="name" name="name" value="{{ $employee->name}}" placeholder="Enter Employee Name" required class="mb-2 mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('name')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Employee Surname</label>
                                            <input type="text" id="surname" name="surname" value="{{ $employee->surname}}" placeholder="Enter Employee Surname" required class="mb-2 mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('surname')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class="block text-sm mb-2">Employee Email</label>
                                            <input type="text" id="email" name="email" value="{{ $employee->email}}" placeholder="Enter Employee Email" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('email')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class=" block text-sm mb-2">Employee Telephone Number</label>
                                            <input type="text" id="telephone" name="telephone" value="{{ $employee->telephone}}" placeholder="Enter Employee Telephone Number" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('telephone')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>
                                        <span>
                                            <label class=" block text-sm mb-2">Employee Starting Date</label>
                                            <input type="date" id="emp_start_date" name="emp_start_date" value="{{ $employee->emp_start_date}}" placeholder="Enter Employee Telephone Number" required class="mb-2 w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" />
                                            @error('emp_start_date')
                                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                            @enderror
                                        </span>

                                    </div>
                                    <div class=" px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Update Employee
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
