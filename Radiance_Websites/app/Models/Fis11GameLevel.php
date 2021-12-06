<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameLevel extends Model
{
    use HasFactory;

    protected $fillable = [
		'stage_id',
		'level_requirement_id',
		'level',
		'star',
		'type',
	];
}
