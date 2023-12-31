<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumParking extends Model
{
    use HasFactory;
    protected $fillable = [
        'NumParking','ParkingEsta','TipoVehiculo','Precio','user_id',
        ];
       
        public function owner()
        {
        return $this->belongsTo(User::class, 'user_id');
        }
}
