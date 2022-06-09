<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral' ]);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 1', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 2', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 3', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 4', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 5', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 6', 'valor' => 10, 'foto' => 'images/produto1.webp', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
