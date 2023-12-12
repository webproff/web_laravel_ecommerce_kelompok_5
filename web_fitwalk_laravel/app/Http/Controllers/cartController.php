<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cart;

use Illuminate\Support\Facades\Auth;


class cartController extends Controller
{
    public function add(Request $request)
    {
        $posterId = $request->input('poster_id');

        $cartItem = CartItem::where('poster_id', $posterId)->first();

        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->save();
        } else {
            $cartItem = new CartItem();
            $cartItem->poster_id = $posterId;
            $cartItem->name = $poster->name;
            $cartItem->price = $poster->price;
            $cartItem->quantity = 1;
            $cartItem->save();
        }

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return redirect()->route('cart.index');
    }

}
