@extends('layouts.app')

@section('content')

    @foreach($orders as $order)
        <div class="container pt-3">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-3">
                        <div class="card-header">{{ __('Заказ #' . $order->id) }}</div>

                        <div class="card-body">
                            <div>Имя: <b> {{ $order->name }}</b></div>
                            <div>Телефон: <b> {{ $order->phone }}</b></div>
                            <div>Email: <b> {{ $order->email }}</b></div>
                            <div>Адрес: <b> {{ $order->address }}</b></div>
                            <hr>
                            <div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0" scope="col">Картинка</th>
                                        <th class="border-top-0" scope="col">Товар</th>
                                        <th class="border-top-0" scope="col">Цена</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($order->orderPositions as $item)
                                        <tr>
                                            <td style="text-align: center; max-width: 110px; width: 140px"><img src="{{ asset($item->tire->img) }}" class="img-fluid" alt=""></td>
                                            <td>
                                                <div class="h6"><b>Название:</b> {{ $item->tire->name }}</div>
                                                <div class="h6"><b>Марка:</b> {{ $item->tire->brand->name }}</div>
                                                <div class="h6"><b>Ширина:</b> {{ $item->tire->width }}</div>
                                                <div class="h6"><b>Профиль:</b> {{ $item->tire->profile }}</div>
                                                <div class="h6"><b>Диаметр:</b> {{ $item->tire->diameter }}</div>
                                                <div class="h6"><b>Сезон:</b> {{ $item->tire->season }}</div>
                                            </td>
                                            <td>{{ $item->tire->price }} руб.</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th class="" scope="col"></th>
                                        <th class="" scope="col"></th>
                                        <th class="" scope="col">Итого <br> {{ $order->total }} руб.</th>
                                        <th style="max-width: 10%; width: 10%" class="" scope="col"></th>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
