<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameTopic extends Model
{
    use HasFactory;

	protected $fillable = [
		'topic',
	];

	public function gameProblems()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasMany(Fis11GameProblem::class, 'topic_id', 'id');
	}
}
