@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="content-top">
                @if ($tires->count() === 0)
                    <div class="alert alert-danger w-100">
                        Данной модели в наличии нет
                    </div>
                @endif
                <div class="content-top-in row">

                    @foreach($tires as $tire)
                        <div class="col-lg-3 p-3 md-col">
                            <div class="col-md h-100">
                                <a class="item-a" href="{{ route('tires.show', $tire->id) }}"><img class="item-img" alt="" src="{{ asset($tire->img) }}"/></a>
                                <div class="top-content">
                                    <h5 class="pb-2"><a href="single.html">{{ $tire->name }}</a></h5>
                                    <div class="h6">Марка: <span>{{ $tire->brand->name }}</span></div>
                                    <div class="h6">Сезон: <span>{{ $tire->season }}</span></div>
                                    <div class="h6">Ширина: <span>{{ $tire->width }}</span></div>
                                    <div class="h6">Профиль: <span>{{ $tire->profile }}</span></div>
                                    <div class="h6">Диаметр: <span>{{ $tire->diameter }}</span></div>
                                    <div class="white row d-flex align-items-center">
                                        <div class="col-xl-7 col pr-0 d-flex align-items-center">
                                            <p class="h4 p-0 m-0">{{ $tire->price }} руб.</p>
                                        </div>
                                        <div class="col-xl-5 col d-flex align-items-center">
                                            <a class="hvr-shutter-in-vertical hvr-shutter-in-vertical2" href="{{ route('tires.show', $tire->id) }}">
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

            <div class="d-flex justify-content-center mb-3">
                {{ $tires->links() }}
            </div>
{{--            <ul class="start">--}}
{{--                <li><a href="#"><i></i></a></li>--}}
{{--                <li><span>1</span></li>--}}
{{--                <li class="arrow"><a href="#">2</a></li>--}}
{{--                <li class="arrow"><a href="#">3</a></li>--}}
{{--                <li class="arrow"><a href="#">4</a></li>--}}
{{--                <li class="arrow"><a href="#">5</a></li>--}}
{{--                <li><a href="#"><i class="next"> </i></a></li>--}}
{{--            </ul>--}}
        </div>
    </div>
@endsection
