<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cart;
use App\Models\poster;

use Illuminate\Support\Facades\Auth;


class cartController extends Controller
{
    public function add(Request $request)
    {
        $poster_Id = $request->input('poster_id');
        $quantity = $request->input('quantity');

        $poster = poster::find($posterId);

        if (!$poster) {
            return response()->json([
                'success' => false,
                'message' => 'poster not found',
            ]);
        }

        $cartItem = CartItem::create([
            'poster_id' => $posterId,
            'title' => $poster->title,
            'price' => $poster->price,
            'quantity' => $quantity,

        ]);

        $cart = Auth::user()->cart;
        $cart->items()->attach($cartItem);

        return response()->json([
            'success' => true,
            'message' => 'Item added to cart successfully',
        ]);
    }

}
