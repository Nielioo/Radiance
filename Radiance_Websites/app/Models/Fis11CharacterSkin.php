<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11CharacterSkin extends Model
{
    use HasFactory;

	protected $fillable = [
		'skin',
		'description',
	];

	public function students()
	{
		// Related Model Class, Pivot Table Name, Foreign Key in Pivot Table, Foreign Key for Related Table in Pivot
		return $this->belongsToMany(Student::class, 'fis11_students_character_skins', 'skin_id', 'student_id')->withTimestamps();
	}

    public function fis11Students()
	{
		return $this->hasMany(Fis11Student::class, 'skin_id', 'id');
	}

}
