<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    protected $fillable = [
        'color', 'placa','tipovehiculo','user_id',
        ];
       
        public function owner()
        {
        return $this->belongsTo(User::class, 'user_id');
        }
}
