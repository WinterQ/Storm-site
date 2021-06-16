@extends('layouts.admin_layout')
@section('title', 'Добавление заявки')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление заявки</h1>
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
                    <h4 class="m-0"><i class="icon fa fa-check"></i>{{session('success')}}</h4>
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
                        <form action="{{route('bid.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Клиент</label>
                                    <select name="client_id" class="form-control" id="client_id" required>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}">{{$client->first_name}} {{$client->last_name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-group">
                                        <label>Дата заявки</label>
                                        <input type="date" name="bid_date" class="form-control" id="exampleInputCategory"
                                               placeholder="Выберите дату заявки" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Статус заявки</label>
                                        <input value="0" type="checkbox" name="status" {{--{{$bid->status ? 'checked' : ''}}--}} class="form-control" id="status">
                                        <label for="status">Выполнено</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
