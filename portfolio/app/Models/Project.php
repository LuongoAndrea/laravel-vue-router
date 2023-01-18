<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{

    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'cover_image', 'user_id'];
    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}