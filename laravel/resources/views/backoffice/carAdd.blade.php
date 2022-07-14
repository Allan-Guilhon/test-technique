<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajoutez un vehicule') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <x-slot name="slot">

        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>
        @endif

        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="" method="post" enctype="multipart/form-data">

                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_brand" class="block text-sm font-medium text-gray-700"> Marque </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="car_brand" id="car_brand" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Marque du vehicule">
                                    <span style="color:red">@error('car_brand'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_model" class="block text-sm font-medium text-gray-700"> Modéle </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="car_model" id="car_model" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Modéle du vehicule">
                                    <span style="color:red">@error('car_model'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_hp" class="block text-sm font-medium text-gray-700"> Puissance (cv) </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="car_hp" id="car_hp" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Puissance du vehicule">
                                    <span style="color:red">@error('car_hp'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_year" class="block text-sm font-medium text-gray-700"> Année </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="car_year" id="car_year" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Puissance du vehicule">
                                    <span style="color:red">@error('car_year'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_finition" class="block text-sm font-medium text-gray-700"> Finition </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="car_finition" id="car_finition" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Modéle du vehicule">
                                    <span style="color:red">@error('car_finition'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="car_description" class="block text-sm font-medium text-gray-700"> Description </label>
                            <div class="mt-1">
                                <textarea id="car_description" name="car_description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Description du vehicule"></textarea>
                                <span style="color:red">@error('car_finition'){{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-6 mb-4 mt-4">
                            <div class="flex text-sm text-gray-600">
                                <label for="car_picture" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Télécharger une photo</span>
                                    <input id="car_picture" name="car_picture" type="file" class="sr-only">
                                </label>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-6 mb-4">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="car_price" class="block text-sm font-medium text-gray-700"> Prix </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="car_price" id="car_price" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Puissance du vehicule">
                                    <span style="color:red">@error('car_price'){{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-blue" type="submit" class="btn btn-primary mb-3">Enregistrer</button>
                        </div>


                    </div>

                </div>
            </form>
        </div>


    </x-slot>
</x-app-layout>
