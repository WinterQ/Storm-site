<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function models()
    {
        return $this->hasMany(ModelCar::class);
    }
}
