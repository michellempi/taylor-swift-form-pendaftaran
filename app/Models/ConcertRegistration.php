<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcertRegistration extends Model
{
    public const TICKET_CATEGORIES = [
        'golden-hour' => ['label' => 'Golden Hour', 'price' => 4250000],
        'lavender-haze' => ['label' => 'Lavender Haze', 'price' => 2750000],
        'daylight' => ['label' => 'Daylight', 'price' => 1650000],
    ];

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'ticket_category',
        'ticket_quantity',
        'unit_price',
    ];
}
