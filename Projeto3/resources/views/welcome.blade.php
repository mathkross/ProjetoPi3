@extends('layouts.store')

@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light ">Time Shop</h1>
                <p class="lead text-muted">Este e-commerce é destinado a todos os apaixonados por futebol !</p>
                <p>
                </p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="mx-auto col-sm-10 col-md-6 col-lg-3 my-2">
                    <img src="{{ asset($product->image) }}" class="img-fluid">
                    <span class="d-block h6 text-center mt-3">{{ $product->name }}</span>
                    <div class="text-center">
                        <span class="text-muted">R$ {{ $product->price }}</span>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('show.product', $product->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
                        <form action="{{ route('cart.store', $product->id) }}" method="POST" style="display:inline">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Comprar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
