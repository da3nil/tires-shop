<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartCheckoutRequest;
use App\Order;
use App\OrderPosition;
use App\Tire;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

use function MongoDB\BSON\toJSON;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function add(int $id, int $qty = 1): \Illuminate\Http\RedirectResponse
    {
        if (!empty(\request()->input()['qty'])) {
            $qty = \request()->input()['qty'];
        }

        $item = Tire::findOrFail($id);

        $cartItem = Cart::add($id, $item->name, $qty, $item->price, 0);

        Cart::associate($cartItem->rowId, Tire::class);

        return back()
            ->with(['success' => 'Товар успешно добавлен в корзину']);
    }

    public function del($rowId)
    {
        Cart::remove($rowId);

        return back()
            ->with(['success' => 'Товар успешно удален из корзины']);
    }

    public function clear()
    {
        Cart::destroy();

        return back()
            ->with(['success' => 'Корзина очищена']);
    }

    public function checkout(CartCheckoutRequest $request)
    {
        $data = $request->all();

        $identifier = Str::random(30);

        $order = Order::make($data);

        $order->identifier = $identifier;

        $order->save();

        $sum = 0;

        foreach (Cart::content() as $item) {
            for ($i = 0; $i < $item->qty; $i++){
                OrderPosition::make(['order_id' => $order->id, 'tire_id' => $item->model->id])->save();
                $sum += $item->model->price;
            }
        }

        $order->total = $sum;

        $order->save();

        Cart::store($identifier);

        Cart::destroy();

        return back()
            ->with(['success' => 'Ваш заказ принят']);
    }

}
