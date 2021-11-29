<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $guarded = ['submit'];

    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
