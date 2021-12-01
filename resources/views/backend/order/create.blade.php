@extends('layouts.app')

@section('content')
    <div class="card radius-15">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="">Create New Category</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('category.index')}}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
        </div>
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="px-4 card-body">
                @include('backend.category.form')
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center">
                    <div class="ml-auto">
                        <button type="submit" class="float-right px-5 btn btn-primary">create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
