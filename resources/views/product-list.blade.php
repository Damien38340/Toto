@extends('layout')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4 font-weight-bold">Product List</h1>
        </div>
    </div>
{{--        <form action="/products/{name}" method="get">--}}
{{--            <label for="sort"> Sort by </label>--}}
{{--            <select name="sort" id="sort" onchange="/products/{name}">--}}
{{--                <option name = "name" value="name" >name</option>--}}
{{--                <option name = "price" value="price" >price</option>--}}
{{--            </select>--}}
{{--        </form>--}}
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <form action="/products/name" method="get">
                    <button type="submit" class="btn btn-warning">Name</button>
                </form>
                <form action="/products/price" method="get">
                    <button type="submit" class="btn btn-danger">Price</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <form action="/categories" method="get">
                    <button type="submit" class="btn btn-success">See all categories</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        @foreach ($listTitle as $products)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <h1 class="text-center">{{$products->name}}</h1>
                    <img src="{{$products->image_url}}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{$products->name}}</h5>
                        <p class="card-text">{{$products->description}}</p>
                        <p class="card-text">{{$products->price . " €"}}</p>
                        <a href="/product/{{$products->id}}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>

@endsection
