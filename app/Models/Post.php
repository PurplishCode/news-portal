<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'post';
    protected $fillable = [
        'title',
        'image',
        'description',
        'categories'
    ];

    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class);
    }
}
