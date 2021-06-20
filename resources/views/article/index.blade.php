@extends('layouts.app')
@section('title','Article')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Article</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary mb-2" href="{{ Route('article.create')}}"><i class="fa fa-plus"></i> create</a>
                    <table class="table table-striped ">
                        <tr class="table">
                            <th>title</th>
                            <th>image</th> 
                            <th>descripsi</th>
                            <th>create</th>
                            <th>update</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                        @forelse ($articles as $datas)
                    <tr>
                        <td><a href="{{ route('article.show',['article' => $datas->id])}}">{!! Str::limit($datas->title,10,'. . .')!!}</a></td>
                        <td><img src="{{ asset('storage/' .$datas->image)}}" alt="error" width="75vh"> </td>
                        <td>{!! Str::limit($datas->descripsi,20,'. . .')!!}</td>
                        <td>{{ $datas->updated_at->diffForHumans()}}</td>
                        <td>{{ $datas->created_at->diffForHumans() }}</td>
                        <td><a href="{{ Route('article.edit',['article' => $datas->id])}}" class="btn btn-warning"><i class="fa fa-cog"></i> Edit</a></td>
                        <td><a href="{{ Route('article.delete',['article' => $datas->id])}}" class="btn btn-danger"><i class="fa fa-trash"></i> delete</a></td>
                        {{-- <td>
                            <form action="{{ Route('article',['article' => $datas->id])}}}" method="post">
                                @csrf
                                @method(delete)
                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td> --}}
                        @empty
                        <h3>article kosong</h3>
                        @endforelse
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
