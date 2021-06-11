@extends('layout')

@section('content')
    <div class="container shadow-lg">
        {{--@foreach($cars as $car)
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
                            <p>Год выпуска: {{$car->year_release}}</p>
                            <p>Мощность двигателя: {{$car->engine_power}}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-content-stretch">
                        <a class="btn btn-primary pull-right" style="font-size: 20px" href="#" role="button">Сделать заявку</a>
                    </div>
                </div>
            </div>
        @endforeach--}}
        <h2 class="mt-2">Вы выбрали</h2>
        @foreach($cars as $car)
            <div class="row p-3">
                <div class="col mb-3">
                    <div class="d-flex justify-content-center flex-column">
                        <div class="">
                            <p>Имя:</p>
                            <input type="text" class="form-control" placeholder="Введите имя">
                            <p class="mt-2">Фамилия:</p>
                            <input type="text" class="form-control" placeholder="Введите фамилию">
                            <p class="mt-2">Телефон:</p>
                            <input type="text" class="form-control" placeholder="Введите номер телефона">
                            <p class="mt-2">Почта:</p>
                            <input type="text" class="form-control" placeholder="Введите электронный адрес">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-3 border rounded bg-dark text-white">
                    <p class="text-center">{{$car->modelcar->brand->name}} {{$car->modelcar->name}}</p>
                    <img class="w-100" src="{{asset('/storage/img/'.$car->photo)}}" alt="">
                    <div class="row d-flex justify-content-between mt-3">
                        <div class="col-md">Стоимость:</div>
                        <div class="col-md-auto ">{{$car->price}} руб.</div>
                    </div>
                    <div class="row d-flex justify-content-between mt-3">
                        <div class="col-md"><p>Количество:</p></div>
                        <div class="col-md-3"><input type="number" class="form-control" max="3" min="1" value="1"></div>
                    </div>
                    <hr class="bg-white">
                    <p>Итого: </p>
                    <a href="" class="btn btn-primary w-100">Отправить заявку</a>
                </div>
            </div>
            <div class="border my-4">
                <p class="text-center text-white bg-dark">Характеристики</p>
                <div class="row d-flex justify-content-around">
                    <div class="col-md-auto">
                        <p>Тип кузова: {{$car->bodywork->name}}</p>
                        <p>Цвет: {{$car->color->name}}</p>
                        <p>Коробка передач: {{$car->transmission->name}}</p>
                        <p>Тип двигателя: {{$car->modelcar->engine->engine_type}}</p>
                    </div>
                    <div class="col-md-auto">
                        <p>Привод: {{$car->actuator->name}}</p>
                        <p>Год выпуска: {{$car->year_release}}</p>
                        <p>Мощность двигателя: {{$car->engine_power}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
