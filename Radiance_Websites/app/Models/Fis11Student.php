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

	/**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
	protected $hidden = [
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
	
	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}
}
