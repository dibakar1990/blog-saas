<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'menu_item_set',
        'order_by'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    
}
