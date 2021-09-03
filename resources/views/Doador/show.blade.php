@extends('layout.top')
@section('contents')

<div class="card">
    <div class="card-header">
        <h1> Doador </h1>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 mt-3"><h1> Informação </h1></div>
            <div class="col-3">Nome: {{$doador->nome}}</div>
            <div class="col-3">CPF: {{$doador->cpf}}</div>
            <div class="col-3">Email: {{$doador->email}} </div>
            <div class="col-3">Data de Nascimento: {{$doador->dataNascimento()}}</div>
            <div class="col-3">Intervalo de Doação: {{$doador->intervaloDoacao()}}</div>
            <div class="col-12 mt-3"><h1> Endereço </h1></div>
            <div class="col-6">Endereço: {{$doador->endereco->endereco}}</div>
            <div class="col-3">Numero: {{$doador->endereco->numero}}</div>
            <div class="col-6">Bairro: {{$doador->endereco->bairro}}</div>
            <div class="col-6">Cep: {{$doador->endereco->cep}}</div>
            <div class="col-6">Cidade: {{$doador->endereco->cidade}}</div>
            <div class="col-6">Estado: {{$doador->endereco->estado}}</div>
            <div class="col-12 mt-3"><h1>Doações</h1></div>
            <table class="table table-striped">
                <tr>
                    <th>Forma de Pagameno</th>
                    <th>Valor</th>
                    <th>Agencia</th>
                    <th>Conta</th>
                    <th>N. Cartão</th>
                </tr>
                @foreach($doador->doacoes as $doacao)
                <tr>
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
</div>

@endsection