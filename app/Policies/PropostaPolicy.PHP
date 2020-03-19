<?php

namespace App\Policies;

use App\Proposta;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropostaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the proposta.
     *
     * @param  \App\User  $user
     * @param  \App\Proposta  $proposta
     * @return mixed
     */
    public function update(User $user, Proposta $proposta)
    {
        return $proposta->owner_id == $user->id;
    }

}
