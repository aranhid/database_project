<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';
    public $timestamps = true;

    protected $fillable = [
        'manufacturer_id',
        'name',
    ];

    public function manufacturer() {
        return $this->belongsTo(CarManufacturer::class);
    }
}
