@extends('app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Product Image -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <img src="{{ $product['thumbnail'] ?? 'https://via.placeholder.com/500' }}" class="card-img-top img-fluid"
                        alt="{{ $product['title'] }}">
                </div>
                <!-- Extra Images -->
                @if (isset($product['images']))
                    <div class="d-flex flex-wrap mt-3">
                        @foreach ($product['images'] as $image)
                            <img src="{{ $image }}" class="img-thumbnail m-1"
                                style="width:100px; height:100px; object-fit:cover;">
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold">{{ $product['title'] }}</h2>
                <p class="text-muted">{{ $product['description'] }}</p>

                <h4 class="text-success mb-3">${{ $product['price'] }}</h4>

                <p><strong>Brand:</strong> {{ $product['brand'] ?? 'N/A' }}</p>
                <p><strong>Category:</strong> {{ $product['category'] ?? 'N/A' }}</p>
                <p><strong>Rating:</strong> ⭐ {{ $product['rating'] ?? 'N/A' }}/5</p>
                <p><strong>Stock:</strong> {{ $product['stock'] ?? 'N/A' }}</p>

                <div class="mt-4">
                    <button class="btn btn-primary btn-lg me-2">Add to Cart</button>
                    <button class="btn btn-outline-secondary btn-lg">Buy Now</button>
                </div>

                <a href="{{ route('product.index') }}" class="btn btn-link mt-4">← Back to Products</a>
            </div>
        </div>
    </div>
@endsection
