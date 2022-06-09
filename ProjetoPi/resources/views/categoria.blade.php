<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h2>Categorias</h2>

 @if(isset($listaCategorias) && count($listaCategorias) > 0)
 <ul>
    @foreach($listaCategorias as $cat)
        <li>{{ $cat->categoria }}</li>
    @endforeach
 </ul>
 @endif

 @if(isset($lista) && count($lista) > 0)
 <ul>
     @foreach($lista as $prod)
        <li>{{ $prod->nome }}</li>
        @endforeach
 </ul>
 @endif
</body>
</html>
