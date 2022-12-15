<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Content extends Model {

    protected $table = 'contents';

    protected $fillable = [
        'page_id', 'status',
        'title', 'description', 'color',
        'section', 'part', 'sort','pic'
    ];

    public function page() {
        return $this->belongsTo('App\Models\Page', 'page_id' , 'id')->first();
    }
    
}









