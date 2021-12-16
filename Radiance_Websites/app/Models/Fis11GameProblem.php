<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameProblem extends Model
{
    use HasFactory;

	protected $fillable = [
		'problem',
		'level_id',
		'topic_id',
	];
}
