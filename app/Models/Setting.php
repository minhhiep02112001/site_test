<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'st_settings';
    protected $fillable = ['key', 'value', 'title', 'domain'];
    public $timestamps = false;
}
