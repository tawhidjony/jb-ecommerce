<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $recentProduct = Product::orderBy('created_at', 'desc')->take(8)->get();
        return view('frontend.welcome', compact('category', 'recentProduct'));
    }

    public function show($uuid)
    {
        $productShow = Product::where('uuid', $uuid)->first();

        return view('frontend.product-details', compact('productShow'));
    }
}
