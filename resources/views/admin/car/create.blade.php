@extends('layouts.admin_layout')
@section('title', 'Добавление автомобиля')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление автомобиля</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Домой</a></li>
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Модель</label>
                                    <select name="model_car_id" class="form-control" id="model_car_id" required>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->brand->name}} {{$model->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Тип кузова</label>
                                    <select name="bodywork_id" class="form-control" required>
                                        @foreach($bodyworks as $bodywork)
                                            <option value="{{$bodywork->id}}">{{$bodywork->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Цвет</label>
                                    <select name="color_id" class="form-control" required>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Коробка передач</label>
                                    <select name="transmission_id" class="form-control" required>
                                        @foreach($transmissions as $transmission)
                                            <option value="{{$transmission->id}}">{{$transmission->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Мощность двигателя</label>
                                    <input type="text" name="engine_power" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите мощьность двигателя" required>
                                </div>
                                <div class="form-group">
                                    <label>Длина</label>
                                    <input type="text" name="length" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите длину" required>
                                </div>
                                <div class="form-group">
                                    <label>Ширина</label>
                                    <input type="text" name="width" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите ширину" required>
                                </div>
                                <div class="form-group">
                                    <label>Высота</label>
                                    <input type="text" name="height" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите высоту" required>
                                </div>
                                <div class="form-group">
                                    <label>Количество</label>
                                    <input type="text" name="count_seats" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите количество" required>
                                </div>
                                <div class="form-group">
                                    <label>Год выпуска</label>
                                    <input type="number" name="year_release" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите год выпуска" required>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="form-label">Фото:</label>
                                    <input type="file" class="form-control" id="photo"
                                           name="photo">
                                </div>
                                <div class="form-group">
                                    <label>Статус</label>
                                    <input type="number" name="status" class="form-control" id="exampleInputCategory"
                                       placeholder="Введите статус" required>
                                </div>
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите цену" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
