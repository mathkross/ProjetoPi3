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

   public function categoria($idcategoria = 0, $listaCategorias, Request $request){
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
    return view("categoria", $data);
}
}
