<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcelas extends Model
{
	protected $fillable = [
		'accounts_id', 'data_parcela', 'valor_parcela'
	];
}
