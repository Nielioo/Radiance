<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

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
	];

	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasOne(Fis11Student::class, 'student_id', 'id');
	}
}
