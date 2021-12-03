<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11Student extends Model
{
	use HasFactory;

	protected $fillable = [
		'student_id',
		'profile_picture',
		'is_login',
		'is_active',
		'role',
	];

	protected $hidden = [
        'remember_token',
    ];

	protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}
}
