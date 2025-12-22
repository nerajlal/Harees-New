<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetalPurity extends Model
{
    use HasFactory;

    protected $fillable = ['metal_id', 'name', 'purity_value'];

    public function metal()
    {
        return $this->belongsTo(Metal::class);
    }

    public function goldRates()
    {
        return $this->hasMany(GoldRate::class);
    }
}
