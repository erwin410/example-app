@extends('layouts.app')


@section('main')
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
                         {{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}
                       </td>

                       <td class="p-4">
                          @include('components.deleteLivre', ['livre'=>$livre])
                       </td>
                    </tr>
                     @endforeach
                 </tbody>
                </table>
@endsection