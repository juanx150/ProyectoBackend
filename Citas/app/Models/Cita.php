<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'message',
        'realPublicacionYear',
        'autor',
        'user_id', 
    ];
       
       
        public function owner()
        {
        return $this->belongsTo(User::class, 'user_id');
        }
       
}
