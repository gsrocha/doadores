@extends('layout.top')
@section('contents')

<div class="card">
    <div class="card-header">
        <h1>Cadastrar Doador</h1>
    </div>
    <div class="card-body">
    @include('layout.errors')
    <form method="post" action="{!!route('doador.store')!!}">
    {!!csrf_field()!!}
    @include('Forms.dados')
    @include('Forms.endereco')
    @include('Forms.doacao') 
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
</div>
@endsection