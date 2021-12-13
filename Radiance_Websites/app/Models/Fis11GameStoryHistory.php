<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameStoryHistory extends Model
{
    use HasFactory;

    protected $fillable = [
		'student_id',
		'level_id',
		'star',
	];

}
