<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = [
        'name',
        'type',
        'cpf',
        'cnpj',
        'rg',
        'birth_date',
        'person_type',
        'zip_code',
        'street',
        'number',
        'district',
        'complement',
        'city',
        'state',
        'phone_type',
        'phone',
    ];
}
