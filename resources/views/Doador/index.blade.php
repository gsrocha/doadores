@extends('layout.top')
@section('contents')

<div class="card">
    <div class="card-header">
        <h1> Doadores </h1>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th colspan='2'>Opções</th>
            </tr>
            @foreach($doadores as $doador)
            <tr>
                <td><a href="{{route('doador.show',$doador)}}">{!!$doador->nome!!}</a></td>
                <td>{!!$doador->cpf!!}</td>
                <td>{!!$doador->email!!}</td>
                <td><a href="{{route('doador.edit',$doador)}}" class="btn btn-primary">Editar</a></td>
                <td>
                    <form method="post" action="{{route('doador.destroy',$doador)}}">
                    {!! method_field('delete') !!}
                    {!! csrf_field()!!}
                    <button type="submit" class="btn btn-primary">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>    
</div>
@endsection