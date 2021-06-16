@extends('layout')

@section('content')
    <div class="container shadow-lg">
        @if(session('success'))
            <div class="alert alert-success my-3" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4 class="m-0"><i class="icon fa fa-check"></i>{{session('success')}}</h4>
            </div>
        @endif
        @foreach($cars as $car)
            <h2 class="mt-2">Вы выбрали: {{$car->modelcar->brand->name}} {{$car->modelcar->name}}</h2>
                <div class="row p-3">
                    <div class="col mb-3">
                        <div class="d-flex justify-content-center flex-column">
                            <form action="{{{route('client.store')}}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <p>Имя:</p>
                                    <input type="text" name="first_name" class="form-control" placeholder="Введите имя">
                                    <p class="mt-2">Фамилия:</p>
                                    <input type="text" name="last_name" class="form-control" placeholder="Введите фамилию">
                                    <p class="mt-2">Телефон:</p>
                                    <input type="text" name="phone" class="form-control" placeholder="Введите номер телефона">
                                    <p class="mt-2">Почта:</p>
                                    <input type="text" name="email" class="form-control" placeholder="Введите электронный адрес">
                                </div>
                                {{--<button type="submit" class="btn btn-primary text-white mt-3">Проверка данных</button>--}}
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 p-3 border rounded bg-dark text-white">
                        <p class="text-center">{{$car->modelcar->brand->name}} {{$car->modelcar->name}}</p>
                        <img class="w-100" src="{{asset('/storage/img/'.$car->photo)}}" alt="">
                        <div class="row d-flex justify-content-between mt-3 mx-1">
                            <div>Стоимость (руб.):</div>
                            <div>{{$car->price}}</div>
                        </div>
                        <button type="submit" class="btn btn-primary text-white mt-3 w-100">Отправить заявку</button>
                    </div>
                </div>
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
