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
        $newOrder = $totalOrder->where('status', '=', '0')->count();
        $shippingProcessing = $totalOrder->where('shipping_status', '=', '0')->count();
        $orderComplete = $totalOrder->where('order_status', '=', '1')->count();
        return view('dashboard', compact('totalProduct', 'newOrder', 'shippingProcessing', 'orderComplete'));
    }
}
