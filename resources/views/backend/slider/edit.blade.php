@extends('layouts.app')
@section('title', 'category | ')
@section('content')
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mb-0">Edit Slider</h5>
                </div>
                <div class="ml-auto">
                    <a href="{{ route('slider.index') }}" class="btn btn-white radius-15">Back</a>
                </div>
            </div>
        </div>
        <form action="{{ route('slider.update', $newItem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="px-4 card-body">
                @include('backend.slider.form')
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
