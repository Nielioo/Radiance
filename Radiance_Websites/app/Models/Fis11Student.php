<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11Student extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var string[]
	 */
	protected $fillable = [
		'student_id',
		'profile_picture',
		'is_login',
		'is_active',
		'role',
	];

	public static function getStudentByStudentId($studentId)
	{
		return self::where('student_id', $studentId)
			->first();
	}

	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}

    public function timeChallengeHistories()
    {
        return $this->hasMany(Fis11GameTimeChallengeHistory::class, 'student_id','id');
    }
}
