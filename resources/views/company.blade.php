<x-layout>

    <div class="min-w-screen min-h-screen bg-indigo-300 flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="/storage/{{ $company->logo }}" class="w-full relative z-10" alt="">
                        <div class="border-4 border-indigo-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10">
                        <h1 class="font-bold uppercase text-2xl mb-5">{{ $company->name }} </h1>
                        <p class="text-2xl leading-none align-baseline m-2"><b>Managing Director : {{$company->director}}</b></p>
                        <p class="text-1xl leading-none align-baseline m-2"><b>Address : {{$company->address}}</b></p>
                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-5">
                            <p class="text-1xl leading-none align-baseline m-2"><b>Telephone : {{$company->telephone}}</b></p>
                            <p class="text-1xl leading-none align-baseline m-2"><b>Website : <a href="{{$company->website}}" class="text-blue-700 underline" target="_blank">{{$company->website}}</a></b></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
