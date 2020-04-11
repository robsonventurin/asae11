<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    //
    protected $table = "table_vendas";
    protected $primaryKey = "id";
    
    function cliente(){
    	return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }
}
