@extends('layouts.app')
@section('title','Article')
@section('content')
<div class="container">
    <hr>
    <h1 class="display-4 mb-2">{{$article->title}}</h1>
    <img src="{{ asset('storage/' .$article->image)}}" alt="error" class="img img-fluid thumbnail mb-2">
    <p>{{$article->descripsi}}</p>
</div>

@endsection