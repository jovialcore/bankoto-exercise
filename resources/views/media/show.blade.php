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
                        <h5 class="card-title">Meida</h5>
                        <p class="card-text"> <img src="" alt="media file should be here "> </p>
                        <p class="card-text">Media description: </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
