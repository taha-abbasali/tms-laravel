<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUUID
{
    protected static function bootHasUUID()
    {
        static::creating(function ($model) {
           if (empty($model->{$model->primaryKey})) {
    $model->{$model->primaryKey} = Str::uuid();
}
        });
    }


    public function initializeHasUUID()
    {
        $this->keyType = 'string';
        $this->incrementing = false;
        $this->casts = [
            ...$this->casts,
            $this->primaryKey => 'string',
        ];
    }

    public function getAuthIdentifier()
{
    return $this->getKey();
}
}
