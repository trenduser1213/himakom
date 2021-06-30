@extends('layouts.app')
@section('title','Edit Article')
@section('content')
<div class="container">
    <form action="{{ Route('article.update',['article' => $article->id])}}" method="post" class="form-group" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title}}">
        </div>
        <div class="mb-3">
            <img src="{{ asset('storage/' .$article->image)}}" alt="error" width="100vh"><br>
            <label for="image" class="form-label">thumbnail</label>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="file" class="form-control" id="image" name="image" value="{{ $article->image}}">
        </div>
        <div class="mb-3">
            <label for="descripsi" class="form-label">descripsi</label>
            @error('descripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea class="form-control" id="descripsi" name="descripsi" rows="10" cols="10">{{ $article->descripsi}}</textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="create" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection