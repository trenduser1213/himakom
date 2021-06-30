@extends('layouts.app')
@section('title','Create visi')
@section('content')
<div class="container">
    <form action="{{ Route('visi.store')}}" method="post" class="form-group">
        @csrf
        <div class="mb3">
            <label for="visi" class="form-label">visi</label>
            @error('visi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="visi" id="visi" class="form-control" autofocus>
        </div>
        <input type="submit" value="create" class="btn btn-primary mt-2">
    </form>
</div>
@endsection