<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    protected $fillable = ['name'];
        /**
     * Get the comments for the blog post.
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
