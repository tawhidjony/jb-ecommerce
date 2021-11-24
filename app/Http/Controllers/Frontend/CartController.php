<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartIndex(){
        $get_cart_item = Cart::content();
        return view('frontend.cart.index', compact('get_cart_item'));
    }

    public function addItemToCart(Request $request)
    {
        $product = Product::where('uuid', $request->uuid)->first();
        $addCart = Cart::add([
            'id'        =>  $product->id,
            'name'      =>  $product->name,
            'price'     =>  $product->price,
            'qty'       =>  $request->qty,
            'weight'    =>  '0',
            'options'   =>  [ 'photo' => $product->thumbnail ]
        ]);

        if($addCart){
            return redirect()->back();
        }else{
            return view('/');
        }
    }

    public function cartUpdate(Request $request){
        Cart::update($request->rowId, $request->qty);
        return redirect()->back();
    }

    public function cartDestroy($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
}
