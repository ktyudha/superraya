<?php

namespace App\Models\Product;

use App\Models\User;
use App\Models\Product\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'user_id', 'product_category_id', 'image'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function scopeFilters(Builder $query, array $filters)
    {
        $query
            ->when(isset($filters['key']) && $filters['key'] !== null, function ($query) use ($filters) {
                $query->where('title', 'like', '%' . $filters['key'] . '%');
            });

        if (isset($filters['sort']) && $filters['sort'] !== null) {
            if ($filters['sort'] == "latest") {
                $query->orderBy('id', 'desc');
            }
        } else {
            // Default sorting if 'sortBy' is not provided
            $query->orderBy('id', 'asc');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
