<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sort_id', 'parent_id', 'name', 'slug'
    ];

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id')->with('children');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->children()->get()->each(function ($children) {
                $children->delete();
            });
            $category->posts()->get()->each(function ($post) {
                $post->delete();
            });
        });
    }

}
