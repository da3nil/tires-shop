@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show w-100 mb-3" style="font-size: 1rem" role="alert">
                <strong>Ошибка!</strong> {{ $errors->first() }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show w-100 mb-3" style="font-size: 1rem" role="alert">
                <strong>Успех!</strong> {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card p-0 w-100">
            <div class="card-header w-100"><h1 class="d-inline">Корзина</h1><button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Оформить заказ</button></div>

            <div class="card-body w-100">
                @if (count(Cart::content()))
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="border-top-0" scope="col">Картинка</th>
                            <th class="border-top-0" scope="col">Товар</th>
                            <th class="border-top-0" scope="col">Количество</th>
                            <th class="border-top-0" scope="col">Цена</th>
                            <th style="max-width: 10%; width: 10%" class="border-top-0" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach (Cart::content() as $item)
                            <tr>
                                <td style="text-align: center; max-width: 110px; width: 140px"><img src="{{ asset($item->model->img) }}" class="img-fluid" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->price }} руб.</td>
                                <td style="max-width: 10%; width: 10%">
                                    <form method="post" action="{{ route('cart.del', ['rowId' => $item->rowId]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <th class="" scope="col"></th>
                            <th class="" scope="col"></th>
                            <th class="" scope="col"></th>
                            <th class="" scope="col">Итого <br> {{ Cart::priceTotal() }} руб.</th>
                            <th style="max-width: 10%; width: 10%" class="" scope="col"></th>
                        </tr>
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info text-center m-0 w-100" style="font-size: 1rem; padding: 1rem" role="alert">
                        Ваша корзина <b>пуста</b>.
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="position: fixed">
        <div class="modal-dialog">
            <div class="modal-content w-100 p-0">
                <div class="modal-header w-100">
                    <h5 class="modal-title" id="exampleModalLabel">Оформить заказ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <div class="modal-body w-100">
                            <div class="form-group w-100 p-0 mb-3">
                                <label for="or1">Имя</label>
                                <input name="name" id="or1" type="text" class="form-control m-0 w-100" style="color: #000000" value="">
                            </div>
                            <div class="form-group w-100 p-0 mb-3">
                                <label for="or2">Email</label>
                                <input name="email" id="or2" type="email" class="form-control m-0 w-100" style="color: #000000" value="">
                            </div>
                            <div class="form-group w-100 p-0 mb-3">
                                <label for="or3">Адрес</label>
                                <input name="address" id="or3" type="text" class="form-control m-0 w-100" style="color: #000000">
                            </div>
                            <div class="form-group w-100 p-0 mb-3">
                                <label for="or4">Телефон</label>
                                <input name="phone" id="or4" type="tel" class="form-control m-0 w-100" style="color: #000000">
                            </div>
                    </div>
                    <div class="modal-footer w-100">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Оформить заказ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
