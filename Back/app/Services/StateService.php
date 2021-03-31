<?php

namespace App\Services;

use App\Models\State;
use Illuminate\Database\Eloquent\Collection;

class StateService
{
    public function getStatesAll(): Collection
    {
        return State::all();
    }
}
