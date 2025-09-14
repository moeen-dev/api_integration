@extends('app')
@section('content')
    <div class="container mt-4">
        <div class="heading text-center">
            <h2>Our Products</h2>
        </div>
        <div class="row">
            @if (isset($products) && count($products) > 0)
                @foreach ($products as $product)
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-3 bg-light">
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="{{ $product['image'][0] ?? 'https://placehold.co/545x621' }}" class="card-img-top"
                        alt="product.jpg"> --}}
                            <img src="{{ isset($product['images'][0]) ? $product['images'][0] : 'https://via.placeholder.com/150' }}"
                                alt="{{ $product['title'] }}" class="card-img-top">

                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ \Illuminate\Support\Str::limit($product['title'], 20, '...') }}
                                </h5>

                                <p> {{ \Illuminate\Support\Str::limit($product['description'], 50, '...') }}</p>
                                <a href="{{ route('product.show', $product['id']) }}" class="btn btn-primary">Learn more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-danger">No product found!</p>
            @endif
        </div>
    </div>
@endsection
