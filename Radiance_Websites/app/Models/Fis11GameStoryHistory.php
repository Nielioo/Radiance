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

	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}

	public function gameLevel()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Fis11GameLevel::class, 'level_id', 'id');
	}
}
