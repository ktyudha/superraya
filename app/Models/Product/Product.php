<?php

namespace App\Models\Product;

use App\Models\User;
use App\Models\Product\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'user_id', 'product_category_id', 'image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
