<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function atualizar(User $user, Link $link)
    {
        return $link->user->is($user)
            ? Response::allow()
            : Response::deny('Esse link não é seu!!');
    }

    // Destroi somente o ID 6
    public function destroy(User $user, Link $link)
    {
        return $link->sort == 6;
    }
}
