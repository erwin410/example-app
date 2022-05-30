@extends('layouts.app')

@section('main')

<div class="overflow-x-auto">
   <div class="min-w-screen min-h-screen  bg-black flex items-center justify-center  font-sans overflow-hidden">
       <div class="w-full lg:w-5/6">
           <div class="bg-black shadow-md rounded rounded-sm my-6">
               @include('components.addLivres')
               <table class="min-w-max w-full table-auto mt-5">
                   <thead>
                       <tr class="bg-slate-800 text-white uppercase text-sm leading-normal">
                           <th class="py-3 px-6 text-left">Titre</th>
                           <th class="py-3 px-6 text-left">Auteurs</th>
                           <th class="py-3 px-6 text-center">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="text-white text-sm font-light">
                    @foreach ($livres as $livre)

<tr class="border-b border-gray-200 ">
  <td class="py-3 px-6 text-left bg-gray-500 whitespace-nowrap">
      <div class="flex items-center">
          <a href="/livres/{{$livre->id}}" class="font-medium">{{$livre->titre}}</a>
      </div>
  </td>
  <td class="py-3 px-6 text-left bg-gray-500">
      <div class="flex items-center">
        <a href="/auteur/{{ $livre->id_auteur }} " class="font-medium">{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</a>
      </div>
  </td>

  <td class="py-3 px-6 text-center bg-gray-500">
      <div class="flex item-center justify-center">

          <a href="/updateLivres/{{ $livre->id }}"><svg class="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
          </svg>
          </a>
         
       @include('components.deleteLivre', ['livre'=>$livre])
      
      </div>
  </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>

@endsection

