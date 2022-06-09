<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;


class ProdutoController extends Controller
{
   public function index(Request $request){
       $data = [];

       $listaProdutos = Produto::all();
       $data["lista"] = $listaProdutos;

       return view("home", $data);
   }

   public function categoria($idcategoria = 0, Request $request){
    $data = [];

    //todos produtos
    $listaCategorias = Categoria::all();
    //listagem de apenas 4
    $queryProduto = Produto::limit(4);

    if($idcategoria != 0){
        $queryProduto->where("categoria_id", $idcategoria);
    }

    $listaProdutos = $queryProduto->get();

    $data["lista"] = $listaProdutos;
    $data["listaCategoria"] = $listaCategorias;
    $data["idcategoria"] = $idcategoria;
    return view("categoria", $data);
 }

public function adicionarCarrinho($idProduto = 0, Request $request){
    $prod = Produto::find($idProduto);

    if($prod){

        $carrinho = session('cart', []);

        array_push($carrinho, $prod);
        session(['cart' => $carrinho]);
    }

    return redirect()->route("home");
}

public function verCarrinho(Request $request)
{
    $carrinho = session('cart', []);

    $data =['cart' => $carrinho];

    return view("carrinho", $data);
}

public function excluirCarrinho($indice, Request $request)
{
    $carrinho = session('cart', []);
    if(isset($carrinho[$indice])){
        unset($carrinho[$indice]);
    }
    session(["cart" => $carrinho]);
    return redirect()->route("ver_carrinho");
}
}
