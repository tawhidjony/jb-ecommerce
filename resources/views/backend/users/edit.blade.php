@extends('layouts.app')
@section('title','users | ')
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Edit User</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('users.index')}}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
            <hr/>
        </div>
        <div class="px-4 card-body">
            <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('backend.users.form')
                <button type="submit" class="float-right px-5 btn btn-primary">Update</button>
            </form>

        </div>
    </div>
@endsection
