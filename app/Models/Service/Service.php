<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'type', 'description_short', 'description', 'image'];

    public function sluggable(): array
    {
        return [
            'type',
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }

    public function showImage()
    {
        if ($this->image) {
            return "storage/$this->image";
        }
        return asset('static/admin/images/default.png');
    }

    public function scopeService($query)
    {
        return $query->where("type", "service");
    }

    public function scopeKeunggulan($query)
    {
        return $query->where("type", "keunggulan");
    }

    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
