<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected $guarded = [];

    public function hasExistsBySlug(?string $slug = null): bool
    {
        $slug = $slug ?? $this->slug;

        return $this->whereSlug($slug)->exists();
    }

    public function hasExistsToEditBySlug(?string $slug = null): bool
    {
        $slug = $slug ?? $this->getOriginal('slug');

        return $this->whereSlug($slug)->where('slug', '!=', $this->slug)->exists();
    }
}
