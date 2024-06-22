@extends('layouts.app')

@section('content')
    <div class="container">
        <h3> Create a Product </h3>
        <div class="row justify-content-center mt-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach

                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('product.store') }}">

                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product title</label>
                    <input type="title" name="title" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Description</label>
                    <input type="description" name="description" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label class="form-label">Select Category</label>

                    <select name="category_id" class="form-select" aria-label="Default select example" required>


                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Select Product Tag</label>

                    <select name="tag_id" class="form-select" aria-label="Default select example" required>


                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach



                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Select Size</label>
                    <select name="size" class="form-select" aria-label="Default select example">
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="89">89</option>
                        <option value="78">78</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Select Weight</label>
                    <select name="weight" class="form-select" aria-label="Default select example">
                        <option value="L">L</option>
                        <option value="XX">xx</option>
                        <option value="XXL">xxl</option>
                        <option value="M">M</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Select Colour</label>
                    <select name="colour" class="form-select" aria-label="Default select example">

                        <option value="Brown">Orange</option>
                        <option value="Green">Brown</option>
                        <option value="Orange">Orange</option>
                        <option value="Purple">Purple</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
