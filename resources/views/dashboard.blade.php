@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white">{{$totalProduct}} <i class='text-white bx bxs-up-arrow-alt font-14'></i> </h2>
                    </div>
                    <div class="ml-auto text-white font-35"><i class='bx bxl-product-hunt'></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Total Product Items</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white">{{$newOrder->count()}} <i class='text-white bx bxs-up-arrow-alt font-14'></i> </h2>
                    </div>
                    <div class="ml-auto text-white font-35"><i class='bx bx-shopping-bag' ></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">New Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white">
                            {{$shippingProcessing->count()}}
                            <i class='text-white bx bxs-up-arrow-alt font-14'></i>
                        </h2>
                    </div>
                    <div class="ml-auto text-white font-35"><i class='bx bxs-truck' ></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Processing shipping</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h2 class="mb-0 text-white">{{$orderComplete->count()}} <i class='text-white bx bxs-up-arrow-alt font-14'></i> </h2>
                    </div>
                    <div class="ml-auto text-white font-35"><i class='bx bx-package' ></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-white">Complete Order</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

