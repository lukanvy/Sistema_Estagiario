<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
	use HasFactory;

	// Adicione campos fillable conforme necessário, por exemplo:
	// protected $fillable = ['nome', 'email', 'telefone'];

	// Se a tabela tiver nome diferente do plural English (supervisors), defina explicitamente:
	// protected $table = 'supervisores';
}

