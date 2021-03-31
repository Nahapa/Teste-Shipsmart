<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["state_id", "name", "email", "phone", "address", "number", "neighborhood", "city", "cep"];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
