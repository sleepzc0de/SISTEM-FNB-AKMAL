<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'category';

    public function makanan() : HasMany
    {
        return $this->hasMany(Makanan::class);
    }

    public function minuman() : HasMany
    {
        return $this->hasMany(Minuman::class);
    }
}
