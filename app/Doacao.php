<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    //
    public $table = "doacoes";
    protected $fillable = ['id_doador','valor_doacao','forma_pagamento','agencia','numero_conta','numero_cartao'];

    public function doador() {
        return $this->belongsTo('App\Doador','id_doador','id');
    }

    public function filtrarNumeroCartao(){
        $inicio = substr($this->numero_cartao,0,6);
        $fim = substr($this->numero_cartao,-4);
        $this->numero_cartao = $inicio."********".$fim;
    }

    public function showFormaPagamento(){
        if($this->forma_pagamento == 1){
            return "Débito";
        } else {
            return "Crédito";
        }
    }

    public function showValor(){
        return number_format($this->valor_doacao,2,',','.');
    }

    public function definirFormaDePagamento(){
        if($this->forma_pagamento == 1){
            $this->numero_cartao = null;
        } else if ($this->forma_pagamento == 2){
            $this->filtrarNumeroCartao();
            $this->numero_conta = null;
            $this->agencia = null;
        }
    }
}
