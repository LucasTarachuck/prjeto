<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transparence extends Model
{
    protected $fillable = [
        'reason',
        'type',
        'quantity'
    ];
}
