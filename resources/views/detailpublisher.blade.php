@extends('layout.headerfooter')

@section('content')

<div class="container judul fs-4">
    <h5>{{$publisher->name}}</h5>
    <h5>Address - {{$publisher->address}}</h5>
    <h5>Phone - {{$publisher->phone}}</h5>
    <h5>Email - {{$publisher->email}}</h5>
</div>

<div class="container p-0 mt-4 mb-4">
    <div class="row d-flex justify-content-center">
        {{-- @for($i = 1; $i <= 10 ; $i++) --}}
        @foreach ($data as $x)
            <div class="col-3 mb-4">
                <div class="card">
                    <img src="{{$x->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$x->title}}</h5>
                        <p class="card-text">by<br>{{$x->author}}</p>
                        <a href="{{url('/detail',[$x->id])}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
            
        {{-- @endfor --}}
    </div>
    
</div>


@endsection
