<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penthouse extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'penthouse';

    protected $fillable = [
        'name',
        'description',
        'price',
        'items_in_stock',
        'thumbnail',
        'category_id',
        'type_id',
    ];

    protected $with = ['category', 'type'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
