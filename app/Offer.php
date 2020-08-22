<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
        'firebase_id',
        'cpf',
        'rg',
        'full_name',
        'payment_document',
        'type_registration_document'
    ];
}
