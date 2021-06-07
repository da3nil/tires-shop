@extends('layouts.app')

@section('content')

    <div class="">
        <div class="intro">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 h-100 d-flex align-items-center justify-content-center justify-content-md-start text-center text-md-left">
                        <div>
                            <h1 class="text-nowrap">Широкий выбор шин
                                <br>для любых авто</h1>
                            <h5 class="text-nowrap">Консультации специалистов по подбору<br>
                                и доставка по низким ценам</h5>
                        </div>
                    </div>
                    <div class="col-md-6 h-100 d-flex align-items-end">
                        <img class="img-fluid d-none d-md-block" src="{{ asset('images/1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="content-top pt-3">
                <h3>Последние товары</h3>
                <div class="content-top-in row" style="padding-top: 1em">
                    @foreach($tires as $tire)
                        <div class="col-lg-3 pl-3 pr-3 pb-3 md-col">
                            <div class="my-item h-100">
                                <a class="item-a" href="{{ route('tires.show', $tire->id) }}"><img class="item-img" alt="" src="{{ asset($tire->img) }}"/></a>
                                <div class="top-content">
                                    <h5 class="pb-2"><b><a class="h4" href="{{ route('tires.show', $tire->id) }}">{{ $tire->name }}</a></b></h5>
                                    <div class="h6">Марка: <span>{{ $tire->brand->name }}</span></div>
                                    <div class="h6">Ширина: <span>{{ $tire->width }}</span></div>
                                    <div class="h6">Профиль: <span>{{ $tire->profile }}</span></div>
                                    <div class="h6">Диаметр: <span>{{ $tire->diameter }}</span></div>
                                    <div class="white row d-flex align-items-center">
                                        <div class="col-xl-7 col pr-0 d-flex align-items-center">
                                            <p class="h4 p-0 m-0">{{ $tire->price }} руб.</p>
                                        </div>
                                        <div class="col-xl-5 col d-flex align-items-center">
                                            <a class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 " href="{{ route('tires.show', $tire->id) }}">
                                                Открыть
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
