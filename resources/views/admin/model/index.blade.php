@extends('layouts.admin_layout')
@section('title','Все модели')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все модели</h1>
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
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        *
                    </button>
                    <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
                </div>
            @endif
            <div class="card-group">
                @foreach($models as $model)
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/storage/img/'.$model->photo)}}" alt="Card image cap">
                            <div class="card-body">
                                <h1 class="card-title">{{$model->name}}</h1><br>
                                <p class="card-text"></p>
                                <form action="{{route('model.destroy',$model->id)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">Удалить</i>
                                    </button>
                                </form>
                                <a href="{{route('model.edit',$model->id)}}" class="btn btn-primary btn-sm edit-btn">Изменить</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
