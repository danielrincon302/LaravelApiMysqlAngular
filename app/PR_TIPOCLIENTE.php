<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PR_TIPOCLIENTE extends Model
{
	public $table = "PR_TIPOCLIENTE";
    protected $fillable = ['TIPO','DESCRIPCION'];

}
