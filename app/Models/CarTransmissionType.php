<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTransmissionType extends Model
{
    use HasFactory;

    protected $table = 'car_transmission_types';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
