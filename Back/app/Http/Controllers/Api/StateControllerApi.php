<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Services\StateService;

class StateControllerApi extends Controller
{
    private $stateService;

    public function __construct()
    {
        $this->stateService = new StateService();
    }

    public function index()
    {
        return StateResource::collection($this->stateService->getStatesAll());
    }
}
