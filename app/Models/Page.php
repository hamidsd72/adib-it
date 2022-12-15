<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    protected $table = 'pages';
    
    protected $fillable = [
        'title', 'status'
    ];
    
    public function contents() {
        return $this->hasMany('App\Models\Content', 'page_id');
    }

    public function contentsMap() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('status','active')->orderBy('part')->get();
    }

    // 1 بخش اول - بنر بالای صغحه
    public function contentsOne() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',1)->where('status','active')->orderBy('part')->get();
    }
    
    // 2 بخش دوم - آیتم های مزایا
    public function contentsTwo() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',2)->where('status','active')->orderBy('part')->get();
    }

    // 3 بخش سوم - درباره ما
    public function contentsTree() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',3)->where('status','active')->orderBy('part')->get();
    }

    // 4 بخش چهارم - نمونه کارها
    public function contentsFour() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',4)->where('status','active')->orderBy('part')->get();
    }

    // 5 بخش پنجم - مزیت ها
    public function contentsFive() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',5)->where('status','active')->orderBy('part')->get();
    }

    // 6 بخش ششم - ویژگی ها
    public function contentsSix() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',6)->where('status','active')->orderBy('part')->get();
    }

    // 7 بخش هفتم - نطرات مشتری
    public function contentsSeven() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',7)->where('status','active')->orderBy('part')->get();
    }

    // 8 بخش هشتم - اسلایدر نطرات مشتری
    public function contentsEight() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',8)->where('status','active')->orderBy('part')->get();
    }
    
    // 9 بخش نهم - وبلاگ
    public function contentsNine() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',9)->where('status','active')->orderBy('part')->get();
    }

    // 10 بخش دهم - تماس ها
    public function contentsTen() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',10)->where('status','active')->orderBy('part')->get();
    }

    // 11 بخش یازدهم - فورم تماس
    public function contentsEleven() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',11)->where('status','active')->orderBy('part')->get();
    }

    // 12 بخش دوازدهم - سوالات متداول
    public function contentsTwelve() {
        return $this->hasMany('App\Models\Content', 'page_id')->where('section',12)->where('status','active')->orderBy('part')->get();
    }

}








