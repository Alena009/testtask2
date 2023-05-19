<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Trip extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'date',
        'car_id',
        'miles'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
