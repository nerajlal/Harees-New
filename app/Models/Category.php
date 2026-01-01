<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    public $timestamps = false; // Assuming updated schema might not follow default timestamps if custom PK used, but safe to keep default or check. User didn't say.

    protected $fillable = [
        'name',
        'code',
        'slug',
        'description'
    ];

    /**
     * Get the products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
