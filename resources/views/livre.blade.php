@extends('layouts.app')


@section('main')

   <div class="flex justify-center items-center w-screen h-screen bg-gray-800">
      
      <div class="container mx-auto mt-10 mb-10 lg:mb-40 lg:px-20">
         <div class="relative w-full my-4 lg:w-9/12 mr-auto rounded-2xl shadow-2xl">
            <img alt="Card" src="https://cdn.pixabay.com/photo/2022/05/25/15/29/petal-7220831_1280.jpg" class="max-w-full rounded-lg shadow-lg"/>
           </div>
         <div class="relative w-full lg:-mt-96 lg:w-3/6 p-8 ml-auto bg-black rounded-2xl z-50">
             <div class="flex flex-col text-white">
               <div class="flex justify-between pl-2">
                  <h3 class="font-bold text-2xl">
                     {{ $livre->titre }}
                  </h3>
                  <i class="fas fa-quote-right text-2xl" />
              </div>
                   <p class="text-white text-xl my-5 px-2">
                      {{ $livre->extrait }}
                   </p>
               </div>
           </div>
       </div>
       
   </div>
   
   
@endsection