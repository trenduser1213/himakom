@extends('layouts.app')
@section('title','Visi')
@section('content')
<div class="container">
  <div class="row"> 
    <div class="card w-75">
      <div class="card-body">
        <div class="card-title"><a href="{{route('visi.create')}}" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Create</a></div>
        <p class="card-text"></p>
        <ul class="list-group">
          @forelse ( $visi as $key )
          <li class="list-group-item d-flex justify-content-between ">
            {{ $key->visi}}
            <div>
              <a href="{{ Route('visi.edit',['visi' => $key->id])}}" class="btn btn-primary mr-2"><i class="fa fa-cog mr-2"></i>Update</a>
              <a href="{{ Route('visi.delete',['visi' => $key->id])}}" class="btn btn-outline-primary"><i class="fa fa-trash mr-2"></i>Delete</a>
            </div>
          </li>
          @empty
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>
        {{-- <div class="container">
          <div class="row">
            <div class="card w-75">
                <div class="card-body">
                  <h5 class="card-title">visi</h5>
                  <p class="card-text">Belum Ada visi</p>
                  <a href="{{route('visi.create')}}" class="btn btn-primary mb-2"><i class="fa fa-plus"></i> Create</a>
                </div>
            </div>
          </div>
        </div> --}}
@endsection