@extends('layout')

@section('content')
    <div class="body-m-c">
        <div class="container">
            <div class="row m-3">
                <div class="col-md-1"><img src="{{'img/basket.png'}}" alt="" class="w-100"></div>
                <div class="col"><h1>Корзина</h1></div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Автомобиль</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Характеристика</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Цена (руб.)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><p>Skoda</p></td>
                    <td><img src="{{'/img/Cars/Skoda/skoda-kodiaq.jpg'}}" class="" width="300" alt=""></td>
                    <td>Цвет: синий</td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="number" value="1" min="0" max="10" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            <div class="input-group-prepend">
                                <span class="input-group-text">шт.</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <input type="number" disabled class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            {{--<div class="input-group-prepend">
                                <span class="input-group-text">руб.</span>
                            </div>--}}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            {{--<div class="row">
                <div class="col p-0">
                    <img src="{{'/img/Cars/Skoda/skoda-kodiaq.jpg'}}" alt="" class="w-100 rounded-left">
                </div>
                <div class="col border border-dark border-left-0 align-self-stretch">
                    <div class="col">
                        <h2 class="text-center">Skoda ...</h2>
                        <hr class="w-50 bg-dark">
                    </div>
                    <div class="col">
                        <p>Цвет: ....</p>
                    </div>
                    <div class="col d-flex align-items-end">
                        <div class="row">
                            <div class="col-md-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Количество</span>
                                    </div>
                                    <input type="number" value="1" min="0" max="10" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="input-group mb-3">
                                    <input type="number" disabled class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
@endsection
