<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Realtor;
use Illuminate\Auth\Access\HandlesAuthorization;

class RealtorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the realtor can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the realtor can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function view(User $user, Realtor $model)
    {
        return true;
    }

    /**
     * Determine whether the realtor can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the realtor can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function update(User $user, Realtor $model)
    {
        return true;
    }

    /**
     * Determine whether the realtor can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function delete(User $user, Realtor $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the realtor can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function restore(User $user, Realtor $model)
    {
        return false;
    }

    /**
     * Determine whether the realtor can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Realtor  $model
     * @return mixed
     */
    public function forceDelete(User $user, Realtor $model)
    {
        return false;
    }
}
