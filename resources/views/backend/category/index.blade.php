
@extends('layouts.app')

@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Category List</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('category.create')}}" class="btn btn-white radius-15">Create Category</a>
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
                            <th>Icon</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($getCategory as $key => $item )
                            <tr>
                                <td>
                                    <img src="{{URL::to($item->photo)}}" style="width: 50px; height: 50px; border-radius: 50px; border: 1px solid; padding: 2px;">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->icon}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('category.edit', $item->id)}}"><button class="btn btn-danger btn-sm "><i class="bx bx-edit-alt"></i>Edit </button></a>
                                        <form action="{{route('category.destroy', $item->id)}}", method="POST" class="ml-3">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Delete</button>
                                        </form>
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

