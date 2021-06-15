<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_order extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
    public function bid()
    {
        return $this->belongsTo(Bid::class, 'bid_id');
    }
}
