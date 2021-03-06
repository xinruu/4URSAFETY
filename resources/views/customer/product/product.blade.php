@extends('layouts.app')

@section('content')
<div class = "myCard">
<div class = "myClass">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
    </div>

    @foreach($categories as $category)
    <h1 class="h2 ml-4 mt-4">{{ $category->name }}</h1>

    <div style= "padding: 0 0 0 0.75rem; margin-bottom:1.5rem;">
    <div class="row">    
        @foreach($products as $product)
        @if($product->category_id == $category->id)
        <div class="myCard5" style="width: 18rem;">
            <div style = "text-align:center;">
                <img src="{{ asset('/storage/'.$product->image) }}" class="card-img-top" alt="...">
            </div>   
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <div style="text-align:center;">
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    </div>
    <hr/>
    @endforeach
    
</div>
</div>
@endsection