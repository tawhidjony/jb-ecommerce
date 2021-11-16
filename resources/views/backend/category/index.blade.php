
@extends('layouts.app')

@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Users</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('users.create')}}" class="btn btn-white radius-15">Create User</a>
                </div>
            </div>
        </div>
        <div class="p-0 card-body">
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            {{-- <th class="text-center">Image</th> --}}
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $key => $user )
                            <tr>
                                <td class="text-center">{{$key + 1}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                {{-- <td class="text-center">
                                    <img src="{{URL::to($user->photo)}}" style="width: 50px; height: 50px; border-radius: 50px; border: 1px solid;padding: 2px;">
                                </td> --}}
                                <td class="text-center">
                                    <a href="{{route('users.edit', $user->id)}}"><i class="fadeIn animated bx bx-edit-alt" ></i></a>
                                    {{-- <form action="{{route('users.destroy', $user->id)}}", method="POST" class="ml-3">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm "><i class="fas fa-trash"></i> Delete</button>
                                    </form> --}}
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

