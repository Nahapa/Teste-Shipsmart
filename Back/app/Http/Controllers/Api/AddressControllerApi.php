<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AddressService;

class AddressControllerApi extends Controller
{

    private $addressService;

    public function __construct()
    {
        $this->addressService = new AddressService();
    }

    public function cep($cep)
    {
        return response()->json(['data' => $this->addressService->getAddressByCep($cep)]);
    }
}
