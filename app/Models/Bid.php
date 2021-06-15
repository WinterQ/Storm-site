<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function car_order()
    {
        return $this->hasMany(Car_order::class);
    }
}
