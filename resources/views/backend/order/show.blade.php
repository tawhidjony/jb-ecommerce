@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">User Information</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$order->user->full_name}}</li>
                    <li class="list-group-item">Email: {{$order->user->email}}</li>
                    <li class="list-group-item">Phone: {{$order->user->phone}}</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">Shipping Address</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $order->shipping->address}} {{ $order->shipping->state }} {{ $order->shipping->post_code }} - {{ $order->shipping->city }}</li>
                </ul>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card radius-15">
                <div class="p-2 d-flex justify-content-between align-items-center">
                    <h3>Order Details</h3>
                    <div class="d-flex">
                        <a href="" class="float-right mr-2 btn btn-outline-primary" >
                            @if ($order->order_status === 1)
                                Order Completed
                            @elseif ($order->shipping_status === 1)
                                Processing Shipping
                            @else
                                Order Pending
                            @endif
                        </a>
                        <form action="{{route('shipping.status')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <button type="submit" {{$order->shipping_status === 3 || $order->shipping_status === 1 ? 'disabled':""}} class="float-right mr-2 btn btn-primary" >Shipping</button>
                        </form>

                        <form action="{{route('order.status')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <button type="submit" {{$order->order_status === 1 ? 'disabled':""}} class="float-right btn btn-primary" >Order Complete</button>
                        </form>
                    </div>
                </div>
                    <table class="table mb-0" >
                        <thead>
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Variation</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_details as $item)
                                <tr>
                                    <td>
                                        <div class="bg-transparent border product-img">
                                            <img src="{{URL::to($item->product[0]['thumbnail'])}}" width="35" alt="">
                                        </div>
                                    </td>
                                    <td width="40%">{{$item->product[0]['name']}}</td>
                                    <td>{{$item->variation}}</td>
                                    <td>{{$item->product[0]['price']}} BDT</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->subtotal}} BDT</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total Price</th>
                                <th>{{$order->order_details->sum('subtotal')}} BDT</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
@endsection
