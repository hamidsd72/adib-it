<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use \App\Notifications\PostPublished;
use Illuminate\Support\Facades\Notification;
use App\Models\News;
use App\Models\Optimizer;
use Intervention\Image\ImageManagerStatic as Image;

/*
|--------------------------------------------------------------------------
| panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('user-home');

Route::get('/user/landing', 'LandingController@landing')->name('user-landing');

//landing
Route::get('landing', 'LandingController@index')->name('landing.design-website');


// landing pages
Route::get('/landing/page/{id}', function ($lang,$id) {
    $page = \App\Models\Page::where('status','active')->findOrFail($id);
    return view('landing/show', compact('page'));
})->name('landing.page.show');

Route::post('landing/page/send-message', 'LandingController@send_message')->name('landing.page.send.message');

Route::get('opt', function () {
    App\Models\Optimizer::saveAs('includes/assets/uploads/products/1398-07-25/photos/photo-8e902387a59393a59d4dd65ea9a3d414.jpg');
});

Route::get('lang/{locale?}', 'HomeController@lang')->name('lang-choose');
Route::post('form-post-slider', 'HomeController@form_post')->name('form-post-slider');

// sitemap.xml
Route::get('sitemap.xml', 'SitemapController@index');

Route::post('job-form', 'EmploymentController@store')->name('job-form-store');
Route::get('job-form-index', 'EmploymentController@index')->name('job-form-index');

//home
//    Route::get('/home', 'HomeController@home')->name('user-home1');

//    Route::get('/', function () {
//        return view('errors/500');
//    });
// suport
Route::get('/پشتیبانی/فرم', 'HomeController@support')->name('user-support');
Route::get('/طراحی-سایت-در-آلمان', 'HomeController@webdesignde')->name('webdesignde');
Route::get('/طراحی-سایت-در-ترکیه', 'HomeController@webdesigntr')->name('webdesigntr');

Route::post('agent-store', 'HomeController@agent_store')->name('agent-store');

Route::get('team-company', 'TeamController@index')->name('team-company');

// update
Route::get('/Update_', 'HomeController@update')->name('user-update');

//search
Route::post('search', 'HomeController@search')->name('search');

// comment
Route::post('comment-submit', 'HomeController@comment')->name('comment-submit');

//page
Route::get('/Page/{slug}', 'HomeController@show')->name('user-page-show');

Route::get('google-adwords', 'HomeController@adwords')->name('adwords-us');
// about
Route::get('about-us', 'HomeController@about')->name('about-us');
Route::get('trans-cad', 'HomeController@transCad')->name('trans-cad');

// Support
Route::get('شماره-های-پشتیبانی', 'SupportController@index')->name('support-tel');
Route::get('ارسال-ایمیل', 'SupportController@email')->name('support-email');

//customers
Route::get('/Customers', 'HomeController@our_customer_list')->name('our-customer-list');
Route::get('customer/company/{slug}', 'HomeController@show_customer')->name('customer.show');


//news
Route::get('/Customers?user-news-list', function () {
    return redirect()->route('our-customer-list');
})->name('user-news-list');
//    Route::get('/Customers', 'HomeController@NewsList')->name('user-news-list');//todo should remove or replace anywhere with route('our-customer-list')
Route::get('/news', 'HomeController@NewsList1')->name('user-news-list1');
Route::get('news/{slug}', 'HomeController@NewsSHow1')->name('user-show-news1');
Route::get('/blog', 'HomeController@articleList')->name('user-article-list');
Route::get('blog/{slug}', 'HomeController@article')->name('user-article-show');
Route::get('/service', 'HomeController@ServiceList')->name('user-service-list');
Route::get('/service-detail', 'HomeController@ServiceDetail')->name('user-service-detail');
Route::get('Service-design-site', 'HomeController@ProductList')->name('user-product-list');
Route::get('Service-design-site/{slug}', 'HomeController@ProductShow')->name('user-product-show');
Route::get('service/{slug}', 'HomeController@newsShow')->name('user-service-show');
Route::get('customer/{slug}', 'HomeController@news')->name('user-news-show');
Route::get('article-tag/{tag}', 'HomeController@article_tag')->name('user-article-tag');
Route::get('contact-us', 'HomeController@contact_us')->name('user-contact');

Route::post('contact-store', 'ContactController@store')->name('contact-store');

Route::get('/Portfolio-design-site', 'HomeController@template')->name('user-gallery');
Route::get('/Portfolio/{slug}/view', 'HomeController@template_view')->name('user-portfolio-view');
Route::get('/portfolio-type/{slug}', 'HomeController@templateType')->name('user-tem-type');
Route::get('/Portfolio/{slug}', 'HomeController@templateCat')->name('user-tem-cat');
Route::get('/Portfolio/iframe/{id}', 'HomeController@iframe_id')->name('user-gallery_iframe');
Route::get('/template/{slug}', 'HomeController@show_portfolio')->name('customer');


Route::get('/question', 'HomeController@question')->name('user-question');

Route::get('/مراکز-خدمات-پس-از-فروش-استان-ها', function () {
    return view('marakez');
})->name('user-marakez');

// torabi
Route::get('torabi', 'HomeController@torabi')->name('torabi');
Route::get('torabi/support', 'HomeController@torabi_support')->name('torabi-support');


Route::get('order', 'HomeController@order')->name('order');

Route::post('order_insert', 'HomeController@insert')->name('order_insert');
Route::post('service/insert', 'HomeController@insertEmail')->name('email_insert');


// search
//    Route::post('/search' , 'HomeController@search_show')->name('search-show');

//employment
Route::get('employment', function () {
    return view('employment');
});

//employment
Route::get('form-employment-form', function () {
    return view('employment');
})->name('employment-form');


Route::post('employment-store', 'ContactController@employment')->name('user-employment-store');


//Basket
Route::get('Add-to-basket/{id}', 'BasketController@Add_to_basket')->name('Add-to-basket');
Route::get('del-from-basket/{id}', 'BasketController@del_from_basket')->name('del-from-basket');

Route::get('services/tariff', function () {
    return view('tariff', ['title' => 'تعرفه ها']);
});

Route::get('team', 'HomeController@team')->name('user-team');
//ip
Route::get('ip', function () {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    $client = $_SERVER['HTTP_USER_AGENT'];
    $b = explode(" ", $client);;
    $system = str_replace(['(', ')'], '', $b[1]);
//        $browser= str_replace(['(',')'],'',$b[10]);
//        if($browser=='Mobile')
//        {
//            $browser= str_replace(['(',')'],'',$b[9]);
//        }
    if ($system == 'Linux;') {
        $system = str_replace(['(', ')'], '', $b[2]);
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=" . $ipaddress);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    $params = json_decode($result);
    $country = $params->geoplugin_continentName . "/" . $params->geoplugin_countryName;
    return view('ip_show', compact('ipaddress', 'system', 'country'));
})->name('ip-show');

