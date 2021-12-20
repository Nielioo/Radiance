<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use phpDocumentor\Reflection\Types\Self_;

class Student extends Authenticatable implements MustVerifyEmail
{
	use HasApiTokens, HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var string[]
	 */
	protected $fillable = [
		'email',
		'password',
		'username',
		'name',
		'school',
		'city',
		'birthyear',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public static function getStudentByEmail($email)
	{
		return self::where('email', $email)
			->first();
	}

	public function studentRelation()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasOne(Fis11Student::class, 'student_id', 'id');
	}

	public function gameTimeChallengeHistories()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasMany(Fis11GameTimeChallengeHistory::class, 'student_id', 'id');
	}

	public function gameStoryHistories()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasMany(Fis11GameStoryHistory::class, 'student_id', 'id');
	}
}
