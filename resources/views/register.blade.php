@extends('layouts.app')

@section('main')
    
<div class="flex flex-col items-center justify-center w-full px-10 pt-5 pb-20 lg:pt-20 lg:flex-row">
    <div class="relative z-10 w-full max-w-2xl mt-20 lg:mt-0 lg:w-5/12">
       <div class="relative z-10 flex flex-col items-start justify-start p-10 bg-white shadow-2xl rounded-xl">
          <h4 class="w-full text-4xl font-medium leading-snug">Register</h4>
          <form action="/register" method="POST" class="relative w-full mt-6 space-y-8">
            @csrf
             <div class="relative">
                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Name</label>
                <input type="text" name="name" id="name" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
             </div>
             <div class="relative">
                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Email</label>
                <input type="email" name="email" id="email" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
             </div>
             <div class="relative">
                <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Password</label>
                <input type="password" name="password" id="password" class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
             </div>
             <div class="relative">
                <button type="submit" class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 ease">Save</button>
             </div>
          </form>
       </div>

@endsection
       