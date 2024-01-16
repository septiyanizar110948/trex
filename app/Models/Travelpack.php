<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travelpack extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
    ];
}
