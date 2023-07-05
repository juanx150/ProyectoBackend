<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 
    ];

    
    
    public function owner():BelongsTo
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function parking(): BelongsTo{
        return $this->belongsTo(Parking::class,'parking');
    }

    public function parkingD(): BelongsTo{
        return $this->belongsTo(ParkingD::class,'parkingD');
    }

    public function vehiculos(): BelongsTo{
        return $this->belongsTo(Vehiculos::class,'vehiculos');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
 
}
