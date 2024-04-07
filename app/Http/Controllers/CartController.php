<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Announcement;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = Cart::where('user_id', $request->user()->id)->first();
        return view('cart.index', ['cart' => $cart]);
    }

    public function add(Request $request, Announcement $announcement)
    {
        $cart = Cart::firstOrCreate(['user_id' => $request->user()->id]);
        $cartItem = CartItem::firstOrCreate(['cart_id' => $cart->id, 'announcement_id' => $announcement->id]);
        $cartItem->increment('quantity');
        return redirect()->back()->with('message', __('ui.addCart'));
    }

    public function remove(CartItem $cartItem)
    {
        if ($cartItem->quantity > 1) {
            $cartItem->quantity--;
            $cartItem->save();
        } else {
            $cartItem->delete();
        }

        return redirect()->back()->with('message',  __('ui.delCart'));
    }

    public function update(Request $request, CartItem $item)
    {
        $item->update(['quantity' => $request->quantity]);
        $total = $item->price * $item->quantity;

        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $cart = Cart::where('user_id', $request->user()->id)->first();

        $cart->items()->delete();
        return redirect()->route('home')->with('message',  __('ui.buy2'));
    }


    public function destroy(Request $request)
    {
        $cart = Cart::where('user_id', $request->user()->id)->first();

        if ($cart) {
            $cart->items()->delete();
        }

        return redirect()->back()->with('message',  __('ui.emptyCart'));
    }
}
