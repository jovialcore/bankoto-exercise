@extends('layouts.app')
@section('content')
    <div class="container">
        <h3> Show all products</h3>
        <div class="row justify-content-center mt-5">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">view</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <th scope="row">{{ $product->name }}</th>
                            <td>{{ $product->title }}</td>
                          
                            <td>{{ $product->description }}</td>
                            <td> <a href="{{ route('product.show', $product->id) }}"> See project </a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
