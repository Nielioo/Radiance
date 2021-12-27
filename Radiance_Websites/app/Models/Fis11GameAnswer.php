<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'problem_id',
        'answer',
    ];

	public function gameProblem()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Fis11GameProblem::class, 'problem_id', 'id');
	}
}
