<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'note',
        'form_type',
        'count_combo',
    ];
}
