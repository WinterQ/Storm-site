@extends('layout')

@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide m-carousel" data-ride="carousel">
        <div class="car ousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{'/img/Carousel/1.jpg'}}" alt="Первый слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{'/img/Carousel/2.jpg'}}" alt="Второй слайд">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{'/img/Carousel/3.jpg'}}" alt="Третий слайд">
            </div>
        </div>
    </div>
    <div class="container shadow">
        <h3 class="m-3">Выберите марку, которая вас интересует:</h3>
        <div class="responsive">
            @foreach($brands as $brand)
                <div class="col-md-3 div-hover">
                    <div class="card m-3">
                        <a href="{{route('brand-show', $brand->id)}}"><img class="card-img-top" src="{{'/storage/img/'.$brand->photo}}" alt=" Card image cap"></a>
                        <h4 class="card-title text-center my-2">{{$brand->name}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
