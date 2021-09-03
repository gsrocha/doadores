<input type='hidden' name='id' value='{{$doador->id}}'>
<div class="form-group">
    <label>Nome</label>
    <input name="nome" type="text" value="{{$doador->nome}}" class="form-control" id="nome" required>
</div>
<div class="form-group">
    <label>Email</label>
    <input name="email" type="email" value="{{$doador->email}}" class="form-control" id="email" required>
</div>
<div class="form-group">
    <label>CPF</label>
    <input name="cpf" type="text" value="{{$doador->cpf}}" class="form-control" id="cpf" required>
</div>
<div class="form-group">
    <label>Data de Nascimento</label>
    <input name="data_de_nascimento" value="{{$doador->data_de_nascimento}}" type="date" class="form-control" id="data_de_nascimento" required>
</div>
<div class="form-group">
    <label for="intervalo">Intervalo de Doação</label>
    {{Form::select('intervalo_doacao',['1' => 'Único', '2' => 'Bimestre','3' => 'Semestre', '4' => 'Anual'],$doador->intervalo_doacao,['class' => 'form-control' , 'placeholder' => 'Selecione'])}}
</div>
 