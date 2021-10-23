@extends('layouts.app')
@section('title','users | ')
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Create Role</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('roles.index')}}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
            <hr/>
        </div>
        <div class="px-4 card-body">
            <form action="{{route('roles.update',$role->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('backend.roles.form')
                <button type="submit" class="float-right px-5 btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
