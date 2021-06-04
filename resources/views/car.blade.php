@extends('layout')

@section('content')
    <div class="container shadow-lg">
        @foreach($cars as $car)
            <h1 class="text-center">{{$car->modelcar->brand->name}} {{$car->modelcar->name}}</h1>
            <img class="card-img-top my-3" src="{{asset('/storage/img/'.$car->photo)}}" alt=" Card image cap">
            <h2>Характеристики:</h2>
            <span class="">
                <div class="row border-top-0">
                <div class="col">
                    <p>Тип кузова: {{$car->bodywork->name}}</p>
                    <p>Коробка передач: {{$car->transmission->name}}</p>
                    <p>Тип двигателя: {{$car->modelcar->engine->engine_type}}</p>
                    <p>Мощность двигателя: {{$car->engine_power}}</p>
                </div>
                <div class="col">
                    <p>Цвет: {{$car->color->name}}</p>
                    <p>Длина: {{$car->length}}</p>
                    <p>Ширина: {{$car->width}}</p>
                    <p>Высота: {{$car->height}}</p>
                </div>
                <div class="col">
                    <p>В наличии: {{$car->count_seats}}</p>
                    <p>Год выпуска: {{$car->year_release}}</p>
                    <p>Цена: {{$car->price}} руб.</p>
                </div>
            </div>
            </span>

        @endforeach
    </div>
@endsection
