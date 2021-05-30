<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['brand_id','engine_id','name','photo'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
