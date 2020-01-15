<?php

namespace App\Policies;

use App\User;
use App\Verse;
use Illuminate\Auth\Access\HandlesAuthorization;

class VersePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any verses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the verse.
     *
     * @param  \App\User  $user
     * @param  \App\Verse  $verse
     * @return mixed
     */
    public function view(User $user, Verse $verse)
    {
        return $user->id === $verse->user_id;
    }

    /**
     * Determine whether the user can create verses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the verse.
     *
     * @param  \App\User  $user
     * @param  \App\Verse  $verse
     * @return mixed
     */
    public function update(User $user, Verse $verse)
    {
        return $user->id === $verse->user_id;
    }

    /**
     * Determine whether the user can delete the verse.
     *
     * @param  \App\User  $user
     * @param  \App\Verse  $verse
     * @return mixed
     */
    public function delete(User $user, Verse $verse)
    {
        return $user->id === $verse->user_id;
    }

    /**
     * Determine whether the user can restore the verse.
     *
     * @param  \App\User  $user
     * @param  \App\Verse  $verse
     * @return mixed
     */
    public function restore(User $user, Verse $verse)
    {
        return $user->id === $verse->user_id;
    }

    /**
     * Determine whether the user can permanently delete the verse.
     *
     * @param  \App\User  $user
     * @param  \App\Verse  $verse
     * @return mixed
     */
    public function forceDelete(User $user, Verse $verse)
    {
        return $user->id === $verse->user_id;
    }
}
