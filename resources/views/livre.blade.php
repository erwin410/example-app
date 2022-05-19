@extends('layouts.app')


@section('main')
   <h1>{{ $livre->titre }}</h1> 

   <p> {{ $livre->extrait }}</p>
@endsection