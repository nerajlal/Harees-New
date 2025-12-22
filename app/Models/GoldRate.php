<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoldRate extends Model
{
    use HasFactory;

    protected $fillable = ['metal_purity_id', 'rate_per_gram', 'effective_date'];

    protected $casts = [
        'effective_date' => 'date',
        'rate_per_gram' => 'decimal:2',
    ];

    public function metalPurity()
    {
        return $this->belongsTo(MetalPurity::class);
    }

    /**
     * Get the latest rate for a specific purity.
     */
    public static function getLatestRate($purityId)
    {
        return self::where('metal_purity_id', $purityId)
                   ->orderBy('effective_date', 'desc')
                   ->orderBy('created_at', 'desc')
                   ->first();
    }
}
