<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


        $announcement = Announcement::find($announcement->id);
        $announcement->purchased = 1;
        $announcement->save();

        return redirect()->back()->with('message', __('ui.addCart'));
    }

    public function remove(CartItem $cartItem)
    {
        $announcement = $cartItem->announcement;

        if ($cartItem->quantity > 1) {
            $cartItem->quantity--;
            $cartItem->save();
        } else {
            $cartItem->delete();
            $announcement->purchased = false;
            $announcement->save();
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

        foreach ($cart->items as $item) {
            $announcement = $item->announcement;
            $announcement->purchased = 2;
            $announcement->save();
        }

        $cart->items()->delete();
        return redirect()->route('home')->with('message',  __('ui.buy2'));
    }


    public function destroy(Request $request)
    {
        $cart = Cart::where('user_id', $request->user()->id)->first();

        if ($cart) {
            $articles = DB::table('cart_items')->where('cart_id', $cart->id)->get();
            foreach($articles as $article){
                $announcement_id = $article->announcement_id;
                DB::table('announcements')->where('id', $announcement_id)->update(['purchased' => 0]);
            }
            $cart->items()->delete();
        }

        return redirect()->back()->with('message',  __('ui.emptyCart'));
    }
}
