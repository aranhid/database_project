<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStatus extends Model
{
    use HasFactory;

    protected $table = 'car_statuses';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
