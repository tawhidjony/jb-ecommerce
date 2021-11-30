<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function cartIndex(){

        $shippingAddress = "";
        if(Auth::check()){
            $shippingAddress = Shipping::where('user_id', Auth::user()->id)->where('status', 1)->first();
        }
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

    public function cartItemStore(Request $request)
    {
        try {
            DB::beginTransaction();
              $payment = Payment::create([
                  'payment_method' => $request->payment,
                  'payment_status' => 0
              ]);

              if($payment){
                  $data = [];
                  $data['payment_id'] = $payment->id;
                  $data['shipping_id'] = $request->shipping_id;
                  $data['user_id'] = Auth::user()->id;
                  $data['order_total'] = Cart::subtotal();
                  $data['status'] = 0;
                  $order = Order::create($data);

                  if($order){
                      $cart_content = Cart::content();
                      foreach ($cart_content as $cart){
                          OrderDetails::create([
                              'order_id' => $order->id,
                              'product_id' => $cart->id,
                              'qty' => $cart->qty,
                              'subtotal' => $cart->qty * $cart->price
                          ]);
                      }
                      DB::commit();
                      Cart::destroy();
                      return redirect()->route('cart.index')->withSuccess('Order Successfully');
                  }
              }
        } catch (\Exception $e) {
            DB::rollback();
            report($e);
            return redirect()->back()->withError('Something went wrong');
        }
    }
}
