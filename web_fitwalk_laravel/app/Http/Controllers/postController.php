<?php

namespace App\Http\Controllers;
use App\Models\poster;
use App\Models\category;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('archon', [
            'title' => 'archon',
            'archon' => poster::latest()->filter(request(['search']))->get(),
        ]);
    }
    
    public function show(poster $poster)
    {
        return view('partial/postgoblog', [
            'title' => 'singlepost',
            'post' => $poster
        ]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $poster = Poster::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "title" => $poster->title,
                "rating" => $poster->rating,
                "price" => $poster->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    // public function remove($id)
    // {
    //     $poster = poster::find($id);
    //     $poster->delete();
    //     return redirect('/cart');

    // }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            // session()->flash('success', 'Product successfully removed!');
            return redirect()->back()->with('success', 'Product successfully removed!');
        }
    }
}
