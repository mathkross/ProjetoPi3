@extends('layout')
@section("scriptjs")
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function(){
   $('#cpf').mask("000.000.000-00")
    });
</script>
@endsection
@section("conteudo")

    <div class="col-12">
        <h2 class="mb-3">Cadastrar Cliente</h2>
    </div>

    <form action="{{route('cadastrar_cliente') }}" method="post">
        @csrf <!--Token para garantir que foi a mesma pessoa q acessou o formulario por exemplo-->
        <div class="row">
        <div class="col-6">
            <div class="form-group">
                Nome: <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                E-mail: <input type="email" name="email" class="form-control" placeholder="exemplo@gmail.com">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                CPF: <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                Senha: <input type="password" name="password" class="form-control" placeholder="Digite sua senha">
            </div>
        </div>
        <div class="col-8">
        <div class="form-group">
            Endereço: <input type="text" name="endereco" class="form-control">
        </div>
        </div>
        <div class="col-1">
            <div class="form-group">
                Número: <input type="text" name="numero" class="form-control">
            </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    Complemento: <input type="text" name="complemento" class="form-control" >
                </div>
                </div>
        <div class="col-4">
        <div class="form-group">
            Cidade: <input type="text" name="cidade" class="form-control">
        </div>
        </div>
        <div class="col-4">
        <div class="form-group">
            CEP: <input type="text" name="cep" class="form-control">
        </div>
        </div>
        <div class="col-4">
        <div class="form-group">
            Estado: <input type="text" name="estado" class="form-control">
        </div>
        </div>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm" />
    </form>

@endsection
