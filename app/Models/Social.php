<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $table = 'socials';

    protected $fillable = [
        'name',
        'status',
        'ordering'
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => ucfirst($value),
        );
    }

    protected function iconName(): Attribute
    {
        return new Attribute(
            get: fn () => $this->name ? strtolower($this->name) : null
        );
    }
}
