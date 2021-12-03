<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

	protected $fillable = [
		'email',
		'password',
		'username',
		'name',
		'school',
		'city',
		'birthyear',
	];

	protected $hidden = [
        'password',
    ];
	
	public function student()
	{
		// Class, Foreign Key, Primary Key
		return $this->hasOne(Fis11Student::class, 'student_id', 'id');
	}
}
