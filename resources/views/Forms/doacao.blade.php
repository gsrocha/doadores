<input type='hidden' name='id_doacao' value='{{$doacao->id}}'>
<input type='hidden' name='id_doador' value='{{$doacao->id_doador}}'>
<div class="form-group">
    <label>Valor da Doação</label>
    <input name="valor_doacao" type="text" class="form-control" value="{{$doacao->valor_doacao}}" id="valor_doacao" required>
</div>
<div class="form-group">
    <label for="intervalo">Forma de Pagamento</label>
    {{Form::select('forma_pagamento',['1' => 'Débito', '2' => 'Crédito'],$doacao->forma_pagamento,['class' => 'form-control' , 'placeholder' => 'Selecione'])}}
</div>
<div class="form-group">
    <label>Agência</label>
    <input name="agencia" type="text" value="{{$doacao->valor_doacao}}" class="form-control" id="agencia">
</div>
<div class="form-group">
    <label>Número da Conta</label>
    <input name="numero_conta" type="text" value="{{$doacao->numero_conta}}" class="form-control" id="numero_conta">
</div>
<div class="form-group">
    <label>Número do Cartão</label>
    <input name="numero_cartao" type="text" value="{{$doacao->numero_cartao}}" class="form-control" id="numero_cartao">
</div>
