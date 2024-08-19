<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'imageables';

    protected $fillable = [];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
