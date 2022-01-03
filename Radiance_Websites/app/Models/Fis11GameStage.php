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

	public static function getStage($stage)
	{
		return self::where('stage', $stage)
			->first();
	}

	public function gameLevels()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasMany(Fis11GameLevel::class, 'stage_id', 'id');
	}
}
