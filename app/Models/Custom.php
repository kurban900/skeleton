<?php

namespace App\Models;

use App\Exceptions\BusinessException;
use Illuminate\Support\Facades\Storage;

class Custom extends BaseModel
{
    protected $table = 'custom';

    protected $guarded = [];

    public function getPoster(): string
    {
        return Storage::url($this->poster);
    }

    /**
     * Boot section
     */
    public static function boot()
    {
        parent::boot();

        $exception = fn($slug) => throw new BusinessException("$slug is exists");

        static::creating(function (self $model) use ($exception) {
            if ($model->hasExistsBySlug()) {
                $exception($model->slug);
            }
        });

        static::updating(function (self $model) use ($exception) {
            if ($model->hasExistsToEditBySlug()) {
                $exception($model->slug);
            }
        });
    }
}
