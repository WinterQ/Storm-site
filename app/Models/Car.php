<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['model_car_id','bodywork_id','color_id','actuator_id','transmission_id','engine_power','count_seats','year_release','photo','price'];

    public function modelcar()
    {
        return $this->belongsTo(ModelCar::class, 'model_car_id');
    }
    public function bodywork()
    {
        return $this->belongsTo(Bodywork::class, 'bodywork_id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
    public function actuator()
    {
        return $this->belongsTo(Actuator::class, 'actuator_id');
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class, 'transmission_id');
    }
    public function car_order()
    {
        return $this->hasMany(Car_order::class);
    }
}
