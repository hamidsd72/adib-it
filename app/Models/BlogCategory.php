<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

class BlogCategory extends Model
{
//    use NestableTrait;

    public $timestamps = false;

    protected $parent = 'parent_id';

    protected $guarded = ['id'];

    public function parent()
    {
        return $this->hasOne('App\Models\BlogCategory', 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\BlogCategory', 'parent_id');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) {
            $item->children()->get()
                ->each(function ($children) {
                    $children->delete();
                });
        });
    }

}
