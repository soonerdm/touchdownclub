<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redriver extends Model
{
    protected $table = 'redriver';
    protected $fillable = [
        'active',
        'title',
        'details',
        'bus_tickets',
        'price',
        'home_content',
    ];
}

