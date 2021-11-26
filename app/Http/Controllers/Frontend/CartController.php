<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function cartIndex(){
        $shippingAddress = Shipping::where('user_id', Auth::user()->id)->where('status', 1)->first();
        $get_cart_item = Cart::content();
        return view('frontend.cart.index', compact('get_cart_item', 'shippingAddress'));
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
            'options'   =>  [
                                'photo' => $product->thumbnail,
                                'variation' => $product->variation
                            ]
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
