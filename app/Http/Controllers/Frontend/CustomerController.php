<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $shipping = Shipping::where('user_id', $user->id)->get();
        return view('frontend.customer.personal-details-user', compact('user', 'shipping'));
    }
}
