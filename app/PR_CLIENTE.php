<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PR_CLIENTE extends Model
{
	public $table = "PR_CLIENTE";
	protected $primaryKey = 'CONS_CLIENTE';
    protected $fillable = ['NOMBRE','CONS_TIPOCLIENTE'];

}
