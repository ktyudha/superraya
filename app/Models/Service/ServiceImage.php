<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'type', 'additional_json'];

    protected $hidden = ['created_at', 'updated_at'];

    public function scopeSingle($query)
    {
        return $query->where("type", 1);
    }

    public function scopeDouble($query)
    {
        return $query->where("type", 2);
    }

    public function scopeTriple($query)
    {
        return $query->where("type", 3);
    }
}
