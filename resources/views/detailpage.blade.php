@extends('layout.headerfooter')

@section('content')

<div class="container judul">
    Book List
</div>

<div class="container mt-3 mb-3">
    <div class="card">
        <img src="{{$data->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p>Title : {{$data->title}}</p>
            <p>Author : {{$data->author}}</p>
            <p>Publisher : {{$data->publisher->name}}</p>
            <p>Year : {{$data->year}}</p>
            <p>Description : <br> {{$data->synopsis}}</p>
        </div>
    </div>
</div>

@endsection
