<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBodyColor extends Model
{
    use HasFactory;

    protected $table = 'car_body_colors';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
