@extends('layout')

@section('content')
    <div class="container shadow-lg">
        @foreach($cars as $car)
            <div class="row bg-dark mt-4 text-white rounded">
                <div class="col">
                    <img class="w-100 rounded mt-3" src="{{asset('/storage/img/'.$car->photo)}}" alt=" Card image cap">
                    <p class="font-weight-bold text-center bg-blue">Цена: {{$car->price}} руб.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center m-3">{{$car->modelcar->brand->name}} {{$car->modelcar->name}}</h4>
                    <hr class="bg-white w-50 rounded">
                    <h4>Характеристики:</h4>
                    <div class="row border-top-0">
                        <div class="col-md-auto">
                            <p>Тип кузова: {{$car->bodywork->name}}</p>
                            <p>Цвет: {{$car->color->name}}</p>
                            <p>Коробка передач: {{$car->transmission->name}}</p>
                            <p>Тип двигателя: {{$car->modelcar->engine->engine_type}}</p>

                        </div>
                        <div class="col">
                            <p>Привод: {{$car->actuator->name}}</p>
                            <p>В наличии: {{$car->count_seats}}</p>
                            <p>Год выпуска: {{$car->year_release}}</p>
                            <p>Мощность двигателя: {{$car->engine_power}}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-content-stretch">
                        <a class="btn btn-primary pull-right" style="font-size: 20px" href="#" role="button">Сделать заявку</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
