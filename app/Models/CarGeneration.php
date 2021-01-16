<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarGeneration extends Model
{
    use HasFactory;

    protected $table = 'car_generations';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'model_id'
    ];

    public function model() {
        return $this->belongsTo(CarModel::class);
    }
}
