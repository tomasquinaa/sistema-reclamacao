@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <form class="bg-gray-500 px-8 py-4 ">
            <div class="space-y-12">
        
            <div class=" border-gray-900/10 pb-12">
                <h2 class="text-2xl text-center font-semibold leading-7 text-blue-300">Personal Information</h2>
        
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-white">E-mail*</label>
                    <div class="mt-2">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
        
                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-white">Nome</label>
                    <div class="mt-2">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
    
                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-white">Área de reclamação*</label>
                    <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                    </div>
                </div>
        
                <div class="col-span-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-white">Área de texto para a reclamação</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        <div class="flex justify-end">
                            <button type="submit" class="text-sm font-semibold leading-6 bg-indigo-600 px-5 py-2 mt-2 text-white rounded">Enviar</button>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        
            </div>
        
           
        </form>
    </div>
   
  
@endsection