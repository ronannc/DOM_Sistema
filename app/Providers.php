<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Providers extends Model
{
	use Notifiable;

	protected $fillable = [
		'nome', 'email', 'telefone'
	];
}
