@extends('layouts.app')

@section('main')

<h3 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"> {{$auteurs->prenom}} {{$auteurs->nom}}</h3>

<div class="overflow-x-auto border-x border-t my-20">
    <table class="table-auto w-full">
        <thead class="border-b">
            <tr class="bg-gray-100">
               <th class="text-left p-4 font-medium">Titre</th>
               <th class="text-left p-4 font-medium">Action</th>
            </tr>
         </thead>
         <tbody>
    @foreach ($livres as $livre)
    <tr class="border-b hover:bg-gray-50">
        <td>
   <a href="/livres/{{$livre->id}}">{{ $livre->titre }}</a>
        </td>

        <td class="p-4">
            @include('components.deleteLivre', ['livre'=>$livre])
         </td>
    </tr>
    @endforeach
         </tbody>
    </table>
</div>
@endsection