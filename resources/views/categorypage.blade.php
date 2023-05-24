@extends('layout.headerfooter')

@section('content')

<div class="container judul">
    {{$title}}
</div>

<div class="container p-0 mt-4 mb-4">
    <div class="row d-flex justify-content-center">
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
    </div>
    
</div>
    
@endsection