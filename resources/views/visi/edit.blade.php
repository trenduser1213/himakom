@extends('layouts.app')
@section('title','Edit Visi')
@section('content')
<div class="container  w-50">
    <form action="{{Route('visi.update',['visi' =>$visi->id])}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb3">
            <label for="visi" class="form-label">Visi</label>
            @error('visi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="visi" id="visi" class="form-control" value="{{ $visi->visi }}" autofocus>
        </div>
        <input type="submit" value="create" class="btn btn-primary mt-2">
    </form>
</div>
@endsection