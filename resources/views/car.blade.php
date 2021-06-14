@extends('layout')

@section('content')
    <div class="container shadow-lg">
        @foreach($cars as $car)
            <h2 class="mt-2">Вы выбрали: {{$car->modelcar->brand->name}} {{$car->modelcar->name}}</h2>
            <form action="{{--{{}}--}}" method="post" enctype="multipart/form-data">
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
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div>Стоимость (руб.):</div>
                            <div>{{$car->price}}</div>
                        </div>
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div><p>Количество:</p></div>
                            <div>
                                <input type="number" class="form-control input" max="3" min="1" value="1">
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-2">Отправить заявку</a>
                    </div>
                </div>
            </form>
            <div class="border my-4">
                <p class="text-center text-white bg-dark">Характеристики</p>
                <div class="row d-flex justify-content-around px-3">
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
