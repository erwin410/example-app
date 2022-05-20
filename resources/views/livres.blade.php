@extends('layouts.app')

@section('main')
    
@include ('components.addLivres')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
   <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
       <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
           <tr>
               <th scope="col" class="px-6 py-3">
                   Titre
               </th>
               <th scope="col" class="px-6 py-3">
                   Auteur
               </th>
               <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Edit</span>
              </th>
           </tr>
       </thead>
       <tbody>
          @foreach ($livres as $livre)
              
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">
                  <a href="/livres/{{$livre->id}}">{{$livre->titre}}</a>
               </td>
               <td class="px-6 py-4">
                  <a href="/auteur/{{ $livre->id_auteur }} ">{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</a>
               </td>
               <div class="flex flex-col">
               <td class="px-6 py-4 text-right">
                  @include('components.deleteLivre', ['livre'=>$livre])
                  <a href="/updateLivres/{{ $livre->id }}" class=" mt-10 ml-0 p-2 pl-5 pr-5 bg-transparent border-2 border-blue-500 text-blue-500 text-base rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Update</a>              
               </td>
            </div>
           </tr>
           @endforeach
       </tbody>
   </table>
</div>
@endsection

{{-- @section('main')
   @include ('components.addLivres')
    
    <div class="overflow-x-auto border-x border-t my-20">
        <table class="table-auto w-full">
           <thead class="border-b">
              <tr class="bg-gray-100">
                 <th class="text-left p-4 font-medium">Titre</th>
                 <th class="text-left p-4 font-medium">Auteur</th>
                 <th class="text-left p-4 font-medium">Action</th>
              </tr>
           </thead>
                 <tbody>
                     @foreach ($livres as $livre)
                    <tr class="border-b hover:bg-gray-50">
                       <td class="p-4">
                          <a href="/livres/{{$livre->id}}">{{$livre->titre}}</a>
                       </td>

                       <td class="p-4">
                      
                         <a href="/auteur/{{ $livre->id_auteur }} ">{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</a>

                       </td>

                       <td class="p-4">
                          @include('components.deleteLivre', ['livre'=>$livre])
                          
                       </td>

                       <td class="p-0 ml-5">
                          <a href="/updateLivres/{{ $livre->id }}">Update</a>
                       </td>
                    </tr>
                     @endforeach
                 </tbody>
                </table>
    </div>
@endsection --}}