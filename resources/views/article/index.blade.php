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

                    {{ __('You are logged in!') }}
                    <table class="table table-striped ">
                        <tr class="table">
                            <th>title</th>
                            <th>image</th> 
                            <th>descripsi</th>
                            <th>create</th>
                            <th>update</th>
                        </tr>
                        @forelse ($articles as $datas)
                    <tr>
                        <td>{{ $datas->title }}</td>
                        <td>{{ $datas->image }}</td>
                        <td>{{ $datas->descripsi }}</td>
                        <td>{{ $datas->updated_at->diffForHumans()}}</td>
                        <td>{{ $datas->created_at->diffForHumans() }}</td>
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
