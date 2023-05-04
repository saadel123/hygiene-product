<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Distribution extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'tele',
        'adresse',
        'message',
        'ville_id',
        'produits_id',
    ];
}
