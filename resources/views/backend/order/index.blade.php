
@extends('layouts.app')

@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Order</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('order.create')}}" class="btn btn-white radius-15">Create User</a>
                </div>
            </div>
        </div>
        <div class="p-0 card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Shipping</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($order as $key => $item )
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->shipping->address}}</td>
                                <td>{{$item->payment->payment_method}}</td>
                                <td>{{$item->status == 0 ? 'Pending' : 'Complete'}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('order.show', $item->id)}}"><button class="btn btn-danger btn-sm "><i class="bx bx-edit-alt"></i>Show </button></a>
                                        {{-- <form action="{{route('order.destroy', $item->id)}}", method="POST" class="ml-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Delete</button>
                                        </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="my-3 text-center">No Items Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

