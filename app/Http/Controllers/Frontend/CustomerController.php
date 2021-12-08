<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $shipping = Shipping::where('user_id', $user->id)->first();
        return view('frontend.customer.personal-details-user', compact('user', 'shipping'));
    }

    public function personalDetails(Request $request)
    {

        $user = Auth::user();
        $orderSearch = $request->search ? $request->search :"";
        return  $orderSearch;
        $purchaseOrder = $this->searchFilter($orderSearch, $user->id);
        return view('frontend.customer.purchase-details-user', compact('purchaseOrder'));
    }

    public function searchFilter($search, $userId)
    {
        $filterProduct = Order::query();
        if($userId){
            $filterProduct->where('user_id', $userId);
        }
        if ($search) {
            $filterProduct->where('id', 'like', '%' . $search . '%');
        }
        return $filterProduct->with(['user', 'shipping', 'payment', 'order_details.product'])->orderBy('created_at', 'DESC')->get();
    }

    public function singlePurchaseDetails($id)
    {
        // $user = Auth::user();
        $purchaseOrderDetails = Order::with(['user', 'shipping', 'payment', 'order_details.product'])->find($id);
        return view('frontend.customer.single-purchase-details', compact('purchaseOrderDetails'));
    }


}
