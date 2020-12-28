<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Add New Patient
                </h2>
            </x-slot>
        
            <div>
                <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error!</strong> 
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="POST" action="{{ route('patients.store') }}">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('name', '') }}" />
                                    @error('name')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="gender" class="block font-medium text-sm text-gray-700">gender</label>
                                    <select name="gender" id="gender" class="form-multiselect block rounded-md shadow-sm mt-1 block w-full" multiple="multiple">
                                            <option value="male" selected>Male</option>
                                            <option value="female" >Female</option>
                                    </select>
                                    @error('gender')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
        
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="date_of_birth" class="block font-medium text-sm text-gray-700">Date of birth</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('date_of_birth', '') }}" placeholder="01/01/2021 coming soon!!"/>
                                    @error('date_of_birth')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>                        
        
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="phone" class="block font-medium text-sm text-gray-700">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('phone', '') }}" placeholder="+216 -- --- ---"/>
                                    @error('phone')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
        
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                           value="{{ old('email', '') }}" />
                                    @error('email')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
        
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <label for="adresse" class="block font-medium text-sm text-gray-700">Adresse</label>
                                    <textarea name="adresse" id="adresse" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4" value="{{ old('adresse', '') }}" ></textarea>
                                    @error('adresse')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
        
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        Envoyer!!
                                    </button>                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>
