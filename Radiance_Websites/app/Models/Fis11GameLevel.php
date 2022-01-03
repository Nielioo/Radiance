<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fis11GameLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'stage_id',
        'level_requirement_id',
        'level',
        'star',
        'type',
    ];

    public static function getLevel($stage, $level)
    {
        if ($stage > 1) {
            $level = (($stage - 1) * 10) + $level;
        }

        return self::where('id', $level)
            ->first();
    }

    public function gameStoryHistories()
    {
        // Class, Foreign Key, Primary Key
        return $this->hasMany(Fis11GameStoryHistory::class, 'level_id', 'id');
    }

    public function gameProblem()
    {
        // Class, Foreign Key, Primary Key
        return $this->hasOne(Fis11GameProblem::class, 'level_id', 'id');
    }

    public function gameStage()
    {
        // Class, Foreign Key, Primary Key
        return $this->belongsTo(Fis11GameStage::class, 'stage_id', 'id');
    }
}
