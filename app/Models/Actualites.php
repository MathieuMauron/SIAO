<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    protected $fillable = [
        'titre',
        'content',
        'accroche',
        'nom'
    ];
}
