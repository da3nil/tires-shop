@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="content-top">
                @if ($tires->count() === 0)
                    <div class="alert alert-danger w-100 mt-3">
                        Данной модели в наличии нет
                    </div>
                @endif
                <div class="content-top-in row">

                    @foreach($tires as $tire)
                        <div class="col-lg-3 p-3 md-col">
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

            <div class="d-flex justify-content-center mb-3">
                {{ $tires->links() }}
            </div>
        </div>
    </div>
@endsection
