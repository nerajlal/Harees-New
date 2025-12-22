<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_visible' => 'boolean',
        'stone_available' => 'boolean',
        'diamond_available' => 'boolean',
        'net_weight' => 'decimal:5',
        'gross_weight' => 'decimal:5',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the images for the product.
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    /**
     * Get the metal associated with the product.
     */
    public function metal()
    {
        return $this->belongsTo(Metal::class);
    }

    /**
     * Get the purity associated with the product.
     */
    public function metalPurity()
    {
        return $this->belongsTo(MetalPurity::class);
    }

    public function getPrimaryImageAttribute()
    {
        $primary = $this->images->where('is_primary', true)->first();
        return $primary ? $primary->image_path : ($this->images->first()->image_path ?? 'default.png');
    }

    // Legacy Image Accessors for View Compatibility
    public function getImg1WebpAttribute()
    {
        // Assuming webp is same as primary or specific logic. 
        // For now return primary or first image.
        return $this->primary_image;
    }

    public function getImg2Attribute()
    {
        // Legacy: Main display image
        return $this->images->skip(0)->first()->image_path ?? null;
    }

    public function getImg3Attribute()
    {
        return $this->images->skip(1)->first()->image_path ?? null;
    }

    public function getImg4Attribute()
    {
        return $this->images->skip(2)->first()->image_path ?? null;
    }

    public function getImg5Attribute()
    {
        return $this->images->skip(3)->first()->image_path ?? null;
    }
}
