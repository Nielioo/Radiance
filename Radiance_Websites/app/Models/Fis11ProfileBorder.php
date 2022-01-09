<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11ProfileBorder extends Model
{
    use HasFactory;

	protected $fillable = [
		'border',
		'description',
	];

	public function students()
	{
		// Related Model Class, Pivot Table Name, Foreign Key in Pivot Table, Foreign Key for Related Table in Pivot
		return $this->belongsToMany(Student::class, 'fis11_students_profile_borders', 'border_id', 'student_id')->withTimestamps();
	}

    public function fis11Students()
	{
		return $this->hasMany(Fis11Student::class, 'border_id', 'id');
	}
}
