<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Meu Shop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{asset('images/produto1.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar um Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
