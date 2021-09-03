<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    //
    public $table = "doadores";
    protected $fillable = ['nome','email','cpf','data_de_nascimento','data_do_cadastro','intervalo_doacao'];

    public function doacoes() {
        return $this->hasMany('App\Doacao','id_doador','id');
    }

    public function endereco() {
        return $this->hasOne('App\DoadorEndereco','id_doador','id');
    }

    public function dataNascimento(){
        if ($this->data_de_nascimento != '') {
            $dt = new \Carbon\Carbon($this->data_de_nascimento);  
            return $dt->format('d/m/Y');
        }
    }

    public function intervaloDoacao(){
        switch($this->intervalo_doacao){
            case '1':
                return "Unico";
            break;

            case '2':
                return "Bimestral";
            break;

            case '3':
                return "Semestral";
            break;

            case '4':
                return "Anual";
            break;
        }
    }
}
