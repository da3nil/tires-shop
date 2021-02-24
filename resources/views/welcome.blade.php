@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="content-top pt-3">
                <h3>Последние товары</h3>
                <div class="content-top-in row" style="padding-top: 1em">
                    @foreach($tires as $tire)
                        <div class="col-lg-3 pl-3 pr-3 pb-3 md-col">
                            <div class="col-md h-100">
                                <a class="item-a" href="#"><img class="item-img" alt="" src="{{ asset($tire->img) }}"/></a>
                                <div class="top-content">
                                    <h5 class="pb-2"><a href="single.html">{{ $tire->name }}</a></h5>
                                    <div class="h6">Марка: <span>{{ $tire->brand->name }}</span></div>
                                    <div class="h6">Ширина: <span>{{ $tire->width }}</span></div>
                                    <div class="h6">Профиль: <span>{{ $tire->profile }}</span></div>
                                    <div class="h6">Диаметр: <span>{{ $tire->diameter }}</span></div>
                                    <div class="white row d-flex align-items-center">
                                        <div class="col-xl-7 col pr-0 d-flex align-items-center">
                                            <p class="h4 p-0 m-0">{{ $tire->price }} руб.</p>
                                        </div>
                                        <div class="col-xl-5 col d-flex align-items-center">
                                            <a class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 " href="single.html">
                                                Купить
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
