@extends('layout')

@section('content')
    <div class="container shadow-lg">
        <div class="card-group mt-3">
            @foreach($cars as $car)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/storage/img/'.$car->photo)}}" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{$car->modelcar->brand->name}} {{$car->modelcar->name}}</h2>
                            <p class="card-text">Количество: {{$car->count_seats}}</p>
                            <p class="card-text">Цена: {{$car->price}}</p>
                            <a class="btn btn-primary" href="{{route('cars-model',[$car->id])}}">Подробно...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
