<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'company',
        'businessnum',
        'businessnum2',
        'businessfax',
        'mobile',
        'mobile2',
        'homenum',
        'homenum2',
        'homefax',
        'othernum',
        'zipcode',
        'street',
        'city',
        'state',
        'country'
    ];
}
