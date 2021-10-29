<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partner can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the partner can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function view(User $user, Partner $model)
    {
        return true;
    }

    /**
     * Determine whether the partner can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the partner can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function update(User $user, Partner $model)
    {
        return true;
    }

    /**
     * Determine whether the partner can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function delete(User $user, Partner $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the partner can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function restore(User $user, Partner $model)
    {
        return false;
    }

    /**
     * Determine whether the partner can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Partner  $model
     * @return mixed
     */
    public function forceDelete(User $user, Partner $model)
    {
        return false;
    }
}
