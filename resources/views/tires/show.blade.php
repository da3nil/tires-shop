@extends('layouts.app')

@section('content')
    <div class="container pt-md-3 pb-3">
        <div class="card pt-3 pb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-1">
                        <img class="img-fluid" src="{{ asset($item->img) }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="mb-3"><h2>Шина {{ $item->name }}</h2></div>
                        <div class="h4">Марка: <span>{{ $item->brand->name }}</span></div>
                        <div class="h4">Сезон: <span>{{ $item->season }}</span></div>
                        <div class="h4">Ширина: <span>{{ $item->width }}</span></div>
                        <div class="h4">Профиль: <span>{{ $item->profile }}</span></div>
                        <div class="h4 mb-3">Диаметр: <span>{{ $item->diameter }}</span></div>
                        <div class="mb-3">{{ $item->content }}</div>
                        <form method="GET" action="{{ route('cart.add', ['id' => $item->id]) }}" class="d-flex">
                            <button class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 border-0 mr-3">Купить</button>
                            <input class="form-control" style="width: 76px" type="number" name="qty" value="4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
