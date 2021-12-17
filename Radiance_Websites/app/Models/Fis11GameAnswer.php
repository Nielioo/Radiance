<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'problem_id',
        'answer',
    ];
}
