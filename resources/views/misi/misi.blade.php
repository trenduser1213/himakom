@extends('layouts.app')
@section('title','Misi')
@section('content')
@forelse ( $misi as $key )
<div class="container">
    <div class="row"> 
        <div class="card w-50">
            <div class="card-body">
              <h5 class="card-title">Misi</h5>
              <p class="card-text">{{ $key->misi}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated {{ $key->updated_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>
    <hr>
    <div class="w-50">
        <form action="{{Route('misi.update',['misi' =>$key->id])}}" method="post" class="form-group">
            @csrf
            @method('PUT')
            <div class="mb3">
                <label for="misi" class="form-label">Misi</label>
                @error('misi')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                {{-- <input type="text" name="misi" id="misi" class="form-control" value="{{ $key->misi }}"> --}}
                <textarea name="misi" id="misi" cols="1" rows="5" class="form-control">{{ $key->misi }}</textarea>
            </div>
            <input type="submit" value="update" class="btn btn-primary mt-2">
        </form>
    </div>
</div>
        @empty
        <div class="card w-50">
            <div class="card-body">
              <h5 class="card-title">Misi</h5>
              <p class="card-text">Belum Ada Misi</p>
            </div>
          </div>
          <hr>
          <div class="w-50">
            <form action="{{ Route('misi.store')}}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="mb3">
                    <label for="misi" class="form-label">Misi</label>
                    @error('misi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="misi" id="misi" class="form-control" autofocus>
                </div>
                <input type="submit" value="create" class="btn btn-primary mt-2">
            </form>
        </div>
        @endforelse
    </div>
 </div>
@endsection