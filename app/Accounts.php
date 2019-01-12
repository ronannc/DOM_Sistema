<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Accounts extends Model
{
	use Notifiable;

	protected $fillable = [
		'name', 'value', 'type', 'parcelas', 'parcelado', 'entrada'
	];
}
