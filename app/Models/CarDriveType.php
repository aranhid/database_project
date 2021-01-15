<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDriveType extends Model
{
    use HasFactory;

    protected $table = 'car_drive_types';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];
}
