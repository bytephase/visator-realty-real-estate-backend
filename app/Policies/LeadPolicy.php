<?php

namespace App\Policies;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeadPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
    }

    public function view(User $user, Lead $lead): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Lead $lead): bool
    {
    }

    public function delete(User $user, Lead $lead): bool
    {
    }

    public function restore(User $user, Lead $lead): bool
    {
    }

    public function forceDelete(User $user, Lead $lead): bool
    {
    }
}
