<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameTimeChallengeHistory extends Model
{
    use HasFactory;

	protected $fillable = [
		'student_id',
		'score',
	];

    public function getUniqueTimeChallengeHistories(){
//        self::all()->distinct()
    }

	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}
}
