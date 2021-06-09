@extends('layouts.admin_layout')
@section('title', 'Добавление модели')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление модели</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Домой</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('admin_panel')}}">Главная</a></li>
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
                        <form action="{{route('model.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Марка</label>
                                    <select name="brand_id" class="form-control" id="brand_id" required>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Тип двигателя</label>
                                    <select name="engine_id" class="form-control" id="engine_id" required>
                                        @foreach($engines as $engine)
                                            <option value="{{$engine->id}}">{{$engine->engine_type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Название модели</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputCategory"
                                           placeholder="Введите название модели" required>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="form-label">Фото:</label>
                                    <input type="file" class="form-control" id="photo"
                                           name="photo">
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
