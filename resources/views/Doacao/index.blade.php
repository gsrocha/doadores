@extends('layout.top')
@section('contents')

<div class="card">
    <div class="card-header">
        <h1> Doações </h1>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Doador</th>
                <th>Forma de Pagameno</th>
                <th>Valor</th>
                <th>Agencia</th>
                <th>Conta</th>
                <th>N. Cartão</th>
            </tr>
            @foreach($doacoes as $doacao)
            <tr>
                <th>{{$doacao->doador->nome}}</th>
                <th>{{$doacao->showFormaPagamento()}}</th>
                <th>{{$doacao->showValor()}}</th>
                <th>{{$doacao->agencia}}</th>
                <th>{{$doacao->numero_conta}}</th>
                <th>{{$doacao->numero_cartao}}</th>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection