<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AddressService
{
    public function getAddressByCep($cep)
    {
        return Http::get("https://cep.awesomeapi.com.br/json/{$cep}")->json();
    }
}
