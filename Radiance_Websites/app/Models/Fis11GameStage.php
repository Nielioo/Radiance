<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameStage extends Model
{
    use HasFactory;

    protected $fillable = [
		'stage',
		'total_stage',
		'total_star',
	];
}
