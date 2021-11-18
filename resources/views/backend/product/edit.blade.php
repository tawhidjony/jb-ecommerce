@extends('layouts.app')
@section('title', 'product | ')

@push('css')
    @include('backend.product.partials.css')
@endpush

@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Edit Product</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{ route('product.index') }}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
        </div>
        <form action="{{ route('product.update', $newItem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="px-4 card-body">
                @include('backend.product.form')
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center">
                    <div class="ml-auto">
                        <button type="submit" class="float-right px-5 btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
   @include('backend.product.partials.js')
@endpush
