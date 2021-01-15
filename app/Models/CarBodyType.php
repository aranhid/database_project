<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBodyType extends Model
{
    use HasFactory;

    protected $table = 'car_body_types';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
