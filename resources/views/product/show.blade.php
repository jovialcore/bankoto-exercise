@extends('layouts.app')
@section('content')
    <div class="container">
        <h3> Show Products</h3>
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
                        <p class="card-text">Product name:  {{$product->title}}</p>
                        <p class="card-text">size : {{$product->size}} </p>
                        <p class="card-text">tags: {{$product->tags[0]->name}}  </p>
                        <p class="card-text">colour: {{$product->colour}} </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
