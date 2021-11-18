@extends('layouts.app')

@push('css')
    @include('backend.product.partials.css')
@endpush

@section('content')
    <div class="card radius-15">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="">Create New Product</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{route('product.index')}}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
        </div>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="px-4 card-body">
                @include('backend.product.form')
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

@push('js')
   @include('backend.product.partials.js')
@endpush
