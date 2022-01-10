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

	public static function getProblemById($id)
	{
		return self::where('id', $id)
			->first();
	}

	public function gameAnswers()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasMany(Fis11GameAnswer::class, 'problem_id', 'id');
	}

	public function gameLevel()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Fis11GameLevel::class, 'level_id', 'id');
	}

	public function gameTopic()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Fis11GameTopic::class, 'topic_id', 'id');
	}
}
