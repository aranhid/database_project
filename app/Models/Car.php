<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CarManufacturer;
use App\Models\CarModel;
use App\Models\CarGeneration;
use App\Models\CarBodyType;
use App\Models\CarBodyColor;
use App\Models\CarDriveType;
use App\Models\CarTransmissionType;
use App\Models\FuelType;
use App\Models\CarState;
use App\Models\CarStatus;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    public $timestamps = true;

    protected $fillable = [
        'manufacturer_id',
        'model_id',
        'generation_id',
        'body_type_id',
        'body_color_id',
        'drive_type_id',
        'transmission_type_id',
        'fuel_type_id',
        'assembly_date',
        'price',
        'status_id',
        'state_id',
    ];

    public function body_type() {
        return $this->belongsTo(CarBodyType::class);
    }

    public function body_color() {
        return $this->belongsTo(CarBodyColor::class);
    }

    public function drive_type() {
        return $this->belongsTo(CarDriveType::class);
    }

    public function manufacturer() {
        return $this->belongsTo(CarManufacturer::class);
    }

    public function model() {
        return $this->belongsTo(CarModel::class);
    }

    public function generation() {
        return $this->belongsTo(CarGeneration::class);
    }

    public function transmission_type() {
        return $this->belongsTo(CarTransmissionType::class);
    }

    public function fuel_type() {
        return $this->belongsTo(FuelType::class);
    }

    public function status() {
        return $this->belongsTo(CarStatus::class);
    }

    public function state() {
        return $this->belongsTo(CarState::class);
    }
}
