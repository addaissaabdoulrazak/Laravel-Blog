@extends('layouts.app')

@section('contenu')

<h2>Cours -{{$itemCourse->nom}}</h2>

<p>

    {{$itemCourse->description}}
</p>
@endsection