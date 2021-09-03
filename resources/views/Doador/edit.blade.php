@extends('layout.top')
@section('contents')

<div class="card">
    <div class="card-header">
        <h1>Editar Doador</h1>
    </div>
    <div class="card-body">
    @include('layout.errors')
    {{ Form::model($doador,['route' => ['doador.update',$doador->id], 'method' => 'PUT' ]) }}
    {!!csrf_field()!!}
    {{ method_field('PUT') }}
    @include('Forms.dados')   
    @include('Forms.endereco')
    <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    </div>
</div>

@endsection