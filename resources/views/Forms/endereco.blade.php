<input type='hidden' name='id_endereco' value='{{$endereco->id}}'>
<input type='hidden' name='id_doador' value='{{$endereco->id_doador}}'>
<div class="form-group">
    <label>Cep</label>
    <input name="cep" type="text" value="{{$endereco->cep}}" class="form-control" id="cep" required>
</div>
<div class="form-group">
    <label>Endereço</label>
    <input name="endereco" type="text" value="{{$endereco->endereco}}" class="form-control" id="endereco" required>
</div>
<div class="form-group">
    <label>Numero</label>
    <input name="numero" type="text" value="{{$endereco->numero}}" class="form-control" id="numero" required>
</div>
<div class="form-group">
    <label>Bairro</label>
    <input name="bairro" type="text" value="{{$endereco->bairro}}" class="form-control" id="bairro" required>
</div>
<div class="form-group">
    <label>Cidade</label>
    <input name="cidade" type="text" value="{{$endereco->cidade}}" class="form-control" id="cidade" required>
</div>
<div class="form-group">
    <label>Estado</label>
    <input name="estado" type="text" value="{{$endereco->estado}}" class="form-control" id="estado" required>
</div>
<script src="{{ asset('js/cep.js') }}"></script>
