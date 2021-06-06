@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-12"><h2>Контакты для связи</h2></div>
        </div>
    </div>
    <div class="container pb-3">
        <div class="row">
            <div class="col-md-4"><p>Телефон: +7 (987) 456-78-90</p>
                <p>Почта: <a href="mailto: mihailmaximov@gmail.com">diana@gmail.com</a></p>
                <p>Скайп: diana</p>
                <p>Телеграм: @diana</p></div>
            <div class="col-md-8">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/tsentralny/1004524292/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Центральный</a><a href="https://yandex.ru/maps/172/ufa/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Торговый центр в Уфе</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUaRVf93A" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </div>
@endsection
