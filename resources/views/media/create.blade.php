@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Upload Media</h3>
        <div class="row justify-content-center mt-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="post" action="{{ route('media.create') }}">

                @csrf
                <div class="mb-3">
                    <label f class="form-label">Media Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Select Category</label>

                    <select name="category" class="form-select" aria-label="Default select example">

                        <option selected>Open this select menu</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection

