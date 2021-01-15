<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'manager_id',
        'client_id',
        'planned_time',
        'status', 
    ];
    public $timestamps = true;

    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function manager() {
        return $this->belongsTo(Staff::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
