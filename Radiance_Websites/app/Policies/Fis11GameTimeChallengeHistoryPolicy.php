<?php

namespace App\Policies;

use App\Models\Fis11GameTimeChallengeHistory;
use App\Models\Student;
use Illuminate\Auth\Access\HandlesAuthorization;

class Fis11GameTimeChallengeHistoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Student $student)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Student  $student
     * @param  \App\Models\Fis11GameTimeChallengeHistory  $fis11GameTimeChallengeHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Student $student, Fis11GameTimeChallengeHistory $fis11GameTimeChallengeHistory)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Student $student)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Student  $student
     * @param  \App\Models\Fis11GameTimeChallengeHistory  $fis11GameTimeChallengeHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Student $student, Fis11GameTimeChallengeHistory $fis11GameTimeChallengeHistory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Student  $student
     * @param  \App\Models\Fis11GameTimeChallengeHistory  $fis11GameTimeChallengeHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Student $student, Fis11GameTimeChallengeHistory $fis11GameTimeChallengeHistory)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Student  $student
     * @param  \App\Models\Fis11GameTimeChallengeHistory  $fis11GameTimeChallengeHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Student $student, Fis11GameTimeChallengeHistory $fis11GameTimeChallengeHistory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Student  $student
     * @param  \App\Models\Fis11GameTimeChallengeHistory  $fis11GameTimeChallengeHistory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Student $student, Fis11GameTimeChallengeHistory $fis11GameTimeChallengeHistory)
    {
        //
    }
}
