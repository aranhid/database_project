<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'secondname',
        'lastname',
        'position_id',
        'work_phone',
        'personal_phone',
        'birth_date',
    ];
}
