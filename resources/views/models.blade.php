@extends('layout')

@section('content')
    <div class="container mtopcont shadow-lg">
        <div class="row d-flex justify-content-center">
            @foreach($models as $model)
                <div class="col-md-5 div-hover my-3">
                    <div class="card">
                        <a href="{{route('cars-model',[$model->id])}}">
                            <img class="card-img-top" src="{{asset('/storage/img/'.$model->photo)}}" alt="Card image cap">
                        </a>
                        <h3 class="card-title text-center m-3">{{$model->brand->name}} {{$model->name}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
