<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarState extends Model
{
    use HasFactory;

    protected $table = 'car_states';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}