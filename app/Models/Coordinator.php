<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Coordinator extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'coordinators';

    protected $fillable = [];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }  
    
    public function municipio(): BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }
}
