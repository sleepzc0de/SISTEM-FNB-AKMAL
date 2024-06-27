<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'menu';

    public function makanan(): BelongsTo
    {
        return $this->belongsTo(Makanan::class);
    }

    public function minuman(): BelongsTo
    {
        return $this->belongsTo(Minuman::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
