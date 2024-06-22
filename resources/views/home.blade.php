@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Dashboard --Backend Developer Interview Task</h3>
        <div class="row justify-content-center mt-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">No of Products:  {{$product->count() ?? 'no product yet'}} </p>
                        <p class="card-text">No of Media : {{$media->count()}} </p>
                        <p class="card-text">No of Product Views: {{$productViewSCount ?? 'no product yet'}} </p>
                    
                        <a href="{{ route('product.create') }}" class="btn btn-success">Create Products</a>

                        <a href="{{ route('product.index') }}" class="btn btn-secondary">View Products </a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">Manage Media</h5>

                        <a href="{{ route('media.create') }}" class="btn btn-success">Create Products</a>

                        <a href="{{ route('media.create') }}" class="btn btn-secondary">View Products </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
