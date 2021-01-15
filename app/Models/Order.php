<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'manager_id',
        'car_id',
        'price',
        'status', 
    ];
    public $timestamps = true;

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function manager() {
        return $this->belongsTo(Staff::class);
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }
}
