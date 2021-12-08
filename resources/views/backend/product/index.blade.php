
@extends('layouts.app')

@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h2 class="mb-0">Product List</h2>
                </div>
                <div class="ml-4 ">
                    <form method="GET" class="d-flex">
                        <select name="category_id"  class="form-control radius-15">
                            <option value="">Select Category</option>
                            @forelse ($categories as $catItem)
                                <option value="{{$catItem->id}}">{{$catItem->name}}</option>
                            @empty
                                <option value="">Category Items</option>
                            @endforelse
                        </select>
                        <button type="submit" class="btn btn-primary radius-15 ml-2">Filter</button>
                    </form>
                </div>
                <div class="ml-auto">
                    <a href="{{route('product.create')}}" class="btn btn-white radius-15">Create Product</a>
                </div>
            </div>
        </div>
        <div class="p-0 card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Variations</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $key => $item )
                            <tr>
                                <td>
                                    <img src="{{URL::to($item->thumbnail)}}" style="width: 50px; height: 50px; border-radius: 50px; border: 1px solid; padding: 2px;">
                                </td>
                                <td><p title="{{$item->name}}" data-toggle="tooltip" data-placement="top">{{Str::limit($item->name,30)}}</p></td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    @foreach ($item->variation as $variations)
                                        <span class="alert-success px-2 py-1 radius-15">{{$variations}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        {{-- <a href="{{route('category.edit', $item->id)}}"><button class="btn btn-danger btn-sm "><i class="bx bx-edit-alt"></i>Edit </button></a> --}}
                                        <form action="{{route('product.destroy', $item->id)}}", method="POST" class="ml-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="my-3 text-center">No Items Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

