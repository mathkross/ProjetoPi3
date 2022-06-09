<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];

        return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request)
    {

        $values = $request->all();
        $usuario = new Usuario();
        //$usuario->cpf = $request->input("cpf");
        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");

        $senha = $request->input("password", "");
        $usuario->password = \Hash::make($senha);

        $endereco = new Endereco($values);
        $endereco->logradouro = $request->input("endereco", "");


        try{
            \DB::beginTransaction();
            $usuario->save();
            $endereco->usuario_id = $usuario->id;
            $endereco->save();
            \DB::commit();
        }catch(\Exception $e){

            \DB::rollback();
        }
            return redirect()->route("cadastrar");
    }
}
