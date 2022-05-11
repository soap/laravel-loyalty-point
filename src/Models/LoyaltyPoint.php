<?php

namespace Soap\LaravelLoyaltyPoint\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Kalnoy\Nestedset\NodeTrait;

class LoyaltyPoint extends Model
{
    use NodeTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'key',
        'description',
        'points',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // auto generate attribute key for model
        static::creating(function ($point) {
            $key = $point->parent ? Str::slug($point->parent->name . ' ' . $point->name, '-') : $point->key;

            $point->key = $key;
        });
    }
}
