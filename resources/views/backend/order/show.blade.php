@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">User Information</div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$orderShow->user->name}}</li>
                    <li class="list-group-item">Email: {{$orderShow->user->email}}</li>
                    <li class="list-group-item">Phone: {{$orderShow->user->phone}}</li>
                </ul> --}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="card radius-15" style="height: 235px">
                <div class="card-header">Shipping Address</div>
                {{-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: {{$orderShow->shipping->name}}</li>
                    <li class="list-group-item">Email: {{$orderShow->shipping->email}}</li>
                    <li class="list-group-item">Phone: {{$orderShow->shipping->phone}}</li>
                    <li class="list-group-item">Address: {{$orderShow->shipping->address}}</li>
                </ul> --}}
            </div>
        </div>

        <div class="col-md-12">
            <div class="card radius-15">
                <div class="p-2 d-flex justify-content-between align-items-center">
                    <h3>Order Details</h3>
                    <div class="d-flex">
                        <a href="" class="float-right mr-2 btn btn-outline-primary" >{{-- {{$orderShow->status !== 1 ? 'Pending':'Delivery Success'}} --}}</a>
                       {{--  <form action="{{route('order.status')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$orderShow->id}}">
                            <button type="submit" {{$orderShow->status === 1 ? 'disabled':""}} class="float-right btn btn-primary" >Aprove</button>
                        </form> --}}
                    </div>
                </div>
                    <table class="table mb-0" >
                        <thead>
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($orderShow->orderDetails as $item)
                                <tr>
                                    <td>
                                        <div class="bg-transparent border product-img">
                                            <img src="{{URL::to($item->product->photo)}}" width="35" alt="">
                                        </div>
                                    </td>
                                    <td>{{$item->product->title}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->qty * $item->price}}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                {{-- <th colspan="4">Total Price</th>
                                <th>{{$orderShow->orderDetails->sum('subtotal')}}</th> --}}
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
@endsection
