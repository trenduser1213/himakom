@extends('layouts.app')
@section('title','Create Article')
@section('content')
<div class="container">
    <form action="{{ Route('article.store')}}" method="post" class="form-group" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Judul</label>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="descripsi" class="form-label">descripsi</label>
            @error('descripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea class="form-control" id="descripsi" name="descripsi" rows="10" cols="10"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="create" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection