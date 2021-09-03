<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoadorEndereco extends Model
{
    //
    public $table = "doador_enderecos";
    protected $fillable = ['id_doador','endereco','cep','numero','bairro','cidade','estado','lat','lon'];

}
