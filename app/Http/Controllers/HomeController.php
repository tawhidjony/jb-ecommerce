<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalProduct = Product::all()->count();
        $totalOrder = Order::query();
        $newOrder = Order::where('status', 0)->get();
        $shippingProcessing = Order::where('shipping_status', 1)->get();
        $orderComplete = Order::where('order_status', 1)->get();
        return view('dashboard', compact('totalProduct', 'newOrder', 'shippingProcessing', 'orderComplete'));
    }
}
