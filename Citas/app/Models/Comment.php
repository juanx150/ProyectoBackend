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

    protected $casts = [
        'expiration' => 'date',
        ];
    
    public function owner():BelongsTo
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function cita(): BelongsTo{
        return $this->belongsTo(Cita::class,'cita');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
 
}
