
@extends('layouts.app')


@section('main')
    
<form action="{{ route('updateLivres', $id) }}" method="POST" class="relative w-full mt-6 space-y-8" enctype="multipart/form-data">
    @csrf
    <div class="relative">
       <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Titre</label>
       <input type="text" name="titre" value="{{$update->titre }}" class="block w-full px-4 py-4 mt-2 text-base text-black placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
    </div>

    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-black">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    </div>
</div>

    <div class="relative">
        <label for="description" class="absolute px-2 ml-2 -mt-3 font-medium text-black bg-white">Description</label>
        <textarea name="extrait" id="description" cols="30" rows="10"  class="block w-full px-4 py-4 mt-2 text-base text-black placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
            {{$update->extrait }}
        </textarea>
    </div>


    <div class="relative">
       <button class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 ease">Valider</button>
    </div>

</form>

@endsection