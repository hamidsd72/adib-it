<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\BlogCategory;
use App;
use App\Models\Team;
use App\Models\CustomerCat;
use App\Models\CustomerType;
use App\Models\Order;
use App\Models\CustomerCategory;
use App\Models\Certificate;
use App\Models\News;
use App\Models\Article;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Galery;
use App\Models\Comment;
use App\Models\GalleryCategory;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Closure;


class HomeController extends Controller
{
    public $locale;

    public function __construct()
    {
        if (!session()->get('locale')) {
            session()->put('locale', 'fa');
        }
        $this->locale = session()->get('locale');
    }

    public function form_post(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'nullable|email',
            'mobile' => 'required',
            'text' => 'required',
        ],
            [
                'full_name.required' => __('sentence.form.reqired1'),
                'email.required' => __('sentence.form.reqired2'),
                'mobile.required' => __('sentence.form.reqired3'),
                'text.required' => __('sentence.form.reqired4'),
            ]);

        try {
            $msg = "نام : $request->full_name";
            $msg .= "\n\n";
            if ($request->email != null && $request->email != '') {
                $msg .= "ایمیل : $request->email";
                $msg .= "\n\n";
            }
            $msg .= "شماره واتساپ : $request->mobile";
            $msg .= "\n\n";
            if ($request->city != null && $request->city != '') {
                $msg .= "شهر : $request->city";
                $msg .= "\n\n";
            }
            if ($request->subject != null && $request->subject != '') {
                $msg .= "موضوع : $request->subject";
                $msg .= "\n\n";
            }
            $msg .= "$request->text";

            // send email
            mail("Info@adib-it.com", "فرم درخواست پروژه", $msg);
//            mail("adeln1368@gmail.com","فرم درخواست پروژه",$msg);
            return redirect()->back()->with('flash_message', trans('sentence.error.contact_success'));
        } catch (\Exception $e) {
            return redirect()->back()->with('err_message', trans('sentence.error.html_code'));
        }
    }

    public function show($slug)
    {
        $item = Menu::where('slug', $slug)->first();
        $gallery = Galery::all();
        return view('page.show', compact('item', 'gallery'));
    }


    public function support()
    {
        return view('support');
    }

    public function torabi()
    {
        return view('torabi.index');
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function transCad()
    {
        return view('product_special');
    }

    public function torabi_support()
    {
        return view('torabi.support');
    }

    public function order()
    {

        $product = Product::where('lang', session()->get('locale'))->select('title', 'id')->get();
        return view('front.order', compact('product'));
//        return view('order', compact('product'));
    }

    public function team(Request $request)
    {
        $data = Team::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('team', compact('data'));
    }

    public function agent_store(Request $request)
    {
        try {
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $headers .= 'From: <info@adib-it.com>' . "\r\n";

            $msg = "نام: " . $request->first_name . "<br>";
            $msg .= "نام خانوادگی: " . $request->last_name . "<br>";
            $msg .= "نام استان: " . $request->province . "<br>";
            $msg .= "نام شهر: " . $request->city . "<br>";
            $msg .= "نام پدر: " . $request->father_name . "<br>";
            $msg .= "شماره شناسنامه: " . $request->sh_sh . "<br>";
            $msg .= "تلفن همراه: " . $request->mobile . "<br>";
            $msg .= "تلفن ثابت: " . $request->phone . "<br>";
            $msg .= "فکس: " . $request->fax . "<br>";
            $msg .= "آدرس فروشگاه: " . $request->address . "<br>";
            $msg .= "کد پستی: " . $request->postal_code . "<br>";

            mail('ml.safari@denay.com', "درخواست نمایندگی خدمات پس از فروش ", html_entity_decode($msg), $headers);
            return redirect()->back()->with(['status' => 'success', 'message' => 'با موفقیت ارسال شد']);

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger', 'message' => 'خطایی رخ داده است، لطفا مجددا تلاش نمایید']);
        }
    }

    public function adwords()
    {
        return view('adwords');
    }

    public function about()
    {
        $item = Menu::find(4);
        $gallery = Galery::all();

        $seo = App\Models\Meta::where('name_page', 'درباره ما')->get();

        $team = Team::orderBy('sort')->get();

        return view('front.about', compact('item', 'gallery', 'seo', 'team'));
//        return view('about', compact('item', 'gallery'));
    }

    public function index($lang = null)
    {
        $locale = app()->getLocale();
        $this->locale = session()->get('locale');

        $galleries = \App\Models\Galery::take(4)->get();
        $team = Team::where('show_to_index_page', true)->orderBy('sort')->get();
        $customers = Customer::where('lang', $locale)->where('service_status', 'active')->orderBy('sort', 'asc')->with('cats')->take(6)->get();
        $customer_icon = Customer::where('lang', $locale)->where('icon_status', 'active')->orderBy('sort', 'asc')->take(6)->get();


        $categories = collect();

        foreach ($customers as $key => $item) {
            $cats = CustomerCategory::whereIn('id', $item->cats ? $item->cats->pluck('category_id')->toArray() : [])->get();
            $customers[$key]['categories'] = $cats ?? [];

            foreach ($item->cats as $cat) {
                $category = CustomerCategory::where('id', $cat->category_id)->first();
                $categories->push($category);
            }

        }

        $categories = $categories->unique();

        $certificate = Certificate::all();
        $sliders = Slider::where('lang', $this->locale)->orderBy('sort_id', 'desc')->get();

        $news = Customer::whereDisplay(1)->orderBy('sort', 'desc')->paginate(8);

        $article = Article::where('lang', 'fa')->orderBy('updated_at', 'desc')->paginate(9);
        $proShow = Product::where('lang', $this->locale)->paginate(12);
        $setting = Setting::where('lang', $this->locale)->first();
        $news1 = News::where('lang', $this->locale)->orderBy('id', 'DESC')->take(6)->get();
        $product = Product::where('lang', session()->get('locale'))->select('title', 'id')->get();
        $services = App\Models\Service::where('lang', session()->get('locale'))->orderBy('sort', 'ASC')->get()->take(6);

        $sliders = Slider::where('lang', $this->locale)->get();

        return view('front.index', compact('team','sliders', 'locale', 'product', 'services', 'categories', 'setting', 'customers', 'customer_icon', 'galleries', 'sliders', 'certificate', 'news', 'article', 'proShow', 'news1'));
    }


    //todo remove later
    public function mr_index($lang = null)
    {
        $locale = app()->getLocale();
        $this->locale = session()->get('locale');

        $galleries = \App\Models\Galery::take(4)->get();
        $team = Team::where('show_to_index_page', true)->orderBy('sort')->get();
        $customers = Customer::where('lang', $locale)->where('service_status', 'active')->orderBy('sort', 'asc')->with('cats')->take(6)->get();
        $customer_icon = Customer::where('lang', $locale)->where('icon_status', 'active')->orderBy('sort', 'asc')->take(6)->get();


        $categories = collect();

        foreach ($customers as $key => $item) {
            $cats = CustomerCategory::whereIn('id', $item->cats ? $item->cats->pluck('category_id')->toArray() : [])->get();
            $customers[$key]['categories'] = $cats ?? [];

            foreach ($item->cats as $cat) {
                $category = CustomerCategory::where('id', $cat->category_id)->first();
                $categories->push($category);
            }

        }

        $categories = $categories->unique();

        $certificate = Certificate::all();
        $sliders = Slider::where('lang', $this->locale)->orderBy('sort_id', 'desc')->get();

        $news = Customer::whereDisplay(1)->orderBy('sort', 'desc')->paginate(8);

        $article = Article::where('lang', 'fa')->orderBy('updated_at', 'desc')->paginate(9);
        $proShow = Product::where('lang', $this->locale)->paginate(12);
        $setting = Setting::where('lang', $this->locale)->first();
        $news1 = News::where('lang', $this->locale)->orderBy('id', 'DESC')->take(6)->get();
        $product = Product::where('lang', session()->get('locale'))->select('title', 'id')->get();
        $services = App\Models\Service::where('lang', session()->get('locale'))->orderBy('sort', 'ASC')->get()->take(6);
        return view('front.mr_index', compact('team', 'locale', 'product', 'services', 'categories', 'setting', 'customers', 'customer_icon', 'galleries', 'sliders', 'certificate', 'news', 'article', 'proShow', 'news1'));
    }

    public function home($lang = null)
    {


        $this->locale = session()->get('locale');

        $galleries = \App\Models\Galery::take(4)->get();


        $customers = Customer::where('lang', $this->locale)->whereDisplay(1)->orderBy('sort', 'ASC')->paginate(8);

        $certificate = Certificate::all();
        $sliders = Slider::where('lang', $this->locale)->orderBy('sort_id', 'desc')->get();

        $news = Customer::whereDisplay(1)->orderBy('sort', 'desc')->paginate(8);
        $article = Article::where('lang', $this->locale)->orderBy('updated_at', 'desc')->paginate(13);
        $proShow = Product::where('lang', $this->locale)->paginate(12);
        $setting = Setting::where('lang', $this->locale)->first();
        $news1 = News::where('lang', $this->locale)->orderBy('id', 'DESC')->take(4)->get();
        return view('home', compact('setting', 'customers', 'galleries', 'sliders', 'certificate', 'news', 'article', 'proShow', 'news1'));
    }

    public function search(Request $request)
    {
        $product = Product::where('title', 'like', '%' . $request->search . '%')->orwhere('text', 'like', '%' . $request->search . '%')->with('photo')->get();
        $article = Article::where('title', 'like', '%' . $request->search . '%')->orwhere('text', 'like', '%' . $request->search . '%')->with('photo')->get();
        $customer = Customer::where('title', 'like', '%' . $request->search . '%')->orwhere('description', 'like', '%' . $request->search . '%')->with('photo')->get();
        $service = Service::where('title', 'like', '%' . $request->search . '%')->orwhere('text', 'like', '%' . $request->search . '%')->with('photo')->get();
        $items = collect([$article, $product, $customer, $service]);
        $items = $array_items = array_filter(json_decode($items));
        $items = collect($items);

        return view('search', compact('items'));
    }

//    public function articleList(Request $request)
//    {
//        $locale = session()->get('locale');
//
//        $categories = BlogCategory::where('show_on_blog', '1')->get();
//
//        $items = Article::where('lang', $this->locale);
//
//        if ($request->has('q')) {
//            $q = $request->q;
//            $items = $items->where('title', 'like', "%$q%")
//                ->orWhere('slug', 'like', "%$q%")
//                ->orWhere('description', 'like', "%$q%")
//                ->orWhere('og_title', 'like', "%$q%")
//                ->orWhere('tags', 'like', "%$q%");
//        }
//
//        if ($request->has('category')) {
//            $category = BlogCategory::where('slug', $request->get('category'))->first();
//
//            if ($category)
//                $items = $category->articles();
//        }
//
//        $items = $items->orderByDesc('created_at')->paginate(7);
//        $article_ids = $items && $items->count() > 0 ? $items->pluck('id')->toArray() : [];
//
//        $other = Article::orderBy('created_at', 'desc')->where('lang', $locale)->whereNotIn('id', $article_ids)->paginate(10);
//
//        return view('front.article.index', compact('items', 'locale', 'other', 'categories'));
////        return view('article.index', compact('items'));
//    }
    public function articleList(Request $request)
    {
        $locale = session()->get('locale');

        $categories = BlogCategory::where('show_on_blog', '1')->get();

        $items = Article::where('lang', $this->locale);

        if ($request->has('q')) {
            $q = $request->q;
            $items = $items->where('title', 'like', "%$q%")
                ->orWhere('slug', 'like', "%$q%")
                ->orWhere('description', 'like', "%$q%")
                ->orWhere('og_title', 'like', "%$q%")
                ->orWhere('tags', 'like', "%$q%");
        }

        if ($request->has('category')) {
            $category = BlogCategory::where('slug', $request->get('category'))->first();

            if ($category)
                $items = $category->articles();
        }

        $items = $items->orderByDesc('created_at')->paginate(12);
        $article_ids = $items && $items->count() > 0 ? $items->pluck('id')->toArray() : [];

//        $other = Article::orderBy('created_at', 'desc')->where('lang', $locale)->whereNotIn('id', $article_ids)->paginate(10);

        return view('front.article.index', compact('items', 'locale', 'categories'));
//        return view('article.index', compact('items'));
    }

    public function article($lang, $slug)
    {

        $locale = session()->get('locale');

        $article = Article::where('slug', $slug)->where('lang', $this->locale)->first();

        if (!$article) {
            abort(404);
        }

        $related = $article->related();

        if ($related && $related->count() < 1) {
            $related = Article::orderBy('created_at', 'desc')->where('lang', $this->locale)->where('id', '!=', $article->id)->with('categories')->paginate(8);
        }

        $tags = $article->tags && !in_array($article->tags, [' ', null]) ? explode( ',',$article->tags) : null;

        return view('front.article.show', compact('article', 'tags', 'related', 'locale'));
//        return view('article.show', compact('article', 'other', 'gallery'));

    }

    public function our_customer_list()
    {
        $this->locale = session()->get('locale');
        $items = Customer::where('lang', $this->locale)->orderBy('sort', 'ASC')->paginate(12);

        return view('front.our_customer.index', compact('items'));
    }

    public function show_customer($locale, $slug)
    {
        $customer = Customer::where('slug', $slug)->where('lang', $locale)->orderBy('sort', 'desc')->first();
        if (!$customer) {
            abort(404);
        }

        return view('front.our_customer.show', compact('customer'));
//        return view('customer', compact('customer'));
    }


    public function NewsList()
    {
        $this->locale = session()->get('locale');
        $items = Customer::where('lang', $this->locale)->orderBy('sort', 'ASC')->paginate(30);
        return view('news.index', compact('items'));
    }

    public function NewsList1(Request $request)
    {
        $locale = session()->get('locale');

        $items = News::orderByDesc('created_at');

        if ($request->has('q')) {
            $q = $request->q;

            $items = $items->where('title', 'like', "%$q%")
                ->orWhere('slug', 'like', "%$q%")
                ->orWhere('description', 'like', "%$q%")
                ->orWhere('tags', 'like', "%$q%");

        }

        $items = $items->paginate(7);

        $news_ids = $items && $items->count() > 0 ? $items->pluck('id')->toArray() : [];

        $other = News::whereNotIn('id',  $news_ids)->paginate(6);

        return view('front.news.index', compact('items','other','locale'));
//        return view('news1.index', compact('items', 'customer'));
    }

    public function NewsSHow1($locale, $slug)
    {
        $locale = session()->get('locale');

        $item = News::where('slug', $slug)->where('lang', $this->locale)->first();
        if (is_null($item)) {
            return redirect()->to('/');
        }

        $other = News::where('id','!=',  $item->id)->paginate(10);


        return view('front.news.show', compact('item','other','locale'));
//        return view('news1.show', compact('item'));
    }

    public function newsShow($lang, $slug)
    {
        $this->locale = session()->get('locale');

        $product = Product::where('lang', $this->locale)->select('title', 'id')->get();

        $gallery = Galery::all();
        $item = Service::where('lang', $this->locale)->where('slug', $slug)->first();
        if (is_null($item)) {
            abort(404);
        }

        $service = Service::where('lang', $this->locale)->get();
        $customers = Customer::where('lang', app()->getLocale())->where('service_status', 'active')->take(6)->get();

        return view('front.service.show', compact('item', 'gallery', 'product', 'service', 'customers'));
//        return view('service.show', compact('item', 'gallery', 'product', 'service', 'customers'));
    }

    public function news($slug)
    {
        $gallery = Galery::all();
        $item = Customer::where('id', $slug)->first();
        if (is_null($item)) {

            return redirect()->to('/');
        }
        $alive = true;
        return view('news.show', compact('item', 'gallery', 'alive'));

    }


    public function article_tag($lang, $tag)
    {
        $articles = Article::orderByDesc('created_at');
        $tags = array_filter(explode(' ', $tag));
        foreach ($tags as $t) {
            $articles = $articles->where('tags', 'LIKE', "%$t%");
        }
        $items = $articles->paginate(12);
        return view('article.index', compact('items'));

    }

    public function ServiceList()
    {
        $locale = session()->get('locale');

        $items = Service::where('lang', app()->getLocale())->orderBy('sort', 'asc')->get();
        $customers = Customer::where('lang', app()->getLocale())->where('service_status', 'active')->take(6)->get();

        return view('front.service.index', compact('items', 'customers', 'locale'));
//        return view('service.index', compact('items', 'customers'));
    }

    public function ServiceDetail()
    {
        $customers_icon = Customer::where('lang', app()->getLocale())->where('icon_status', 'active')->orderBy('sort', 'asc')->take(30)->get();
        return view('service.detail', compact('customers_icon'));
    }

    public function ServiceShow($slug)
    {

        $item = Service::where('lang', $this->locale)->where('slug', $slug)->first();
        if (is_null($item)) {
            return redirect()->to('/');
        }
        return view('service.show', compact('item',));
    }

    public function ProductList()
    {
        $items = Product::paginate(12);
        return view('product.index', compact('items', 'cat'));
    }

    public function ProductShow($slug)
    {
        $items = Product::get();
        $item = Product::where('slug', $slug)->first();
        $service = Service::all();

        if (is_null($item)) {

            return redirect()->to('/');

        }

        $comments = Comment::where(['product_id' => $item->id, 'status' => 1, 'parent_id' => 0])->get();
        return view('product.show', compact('item', 'items', 'comments', 'service'));
    }

    public function comment(Request $request)
    {
        try {
            $item = new Comment();
            $item->name = $request->name;
            $item->email = $request->email;
            $item->product_id = $request->product_id;
            $item->text = $request->text;
            if (Auth::user()) {
                $item->user_id = Auth::user()->id;
            }
            $item->save();
            return redirect()->back()->with(['status' => 'success', 'message' => 'نظر شما با موفقیت ارسال شد، پس از تایید ادمین در سایت نمایش داده خواهد شد']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'danger', 'message' => 'یک خطا رخ داده است، لطفا مجددا تلاش نمایید']);
        }
    }

    public function update()
    {

        return view('update');
    }


    public function insert(Request $request)
    {
        $item = new Order();
        try {
            $item->city = $request->city;
            $item->name = $request->name;
            $item->telephone = (int)$request->telephone;
            $item->mobile = (int)$request->mobile;
            $item->company = $request->company;
            $item->address = $request->address;
            $item->product = $request->product;
            $item->save();
            Session::put('alert', [

                    'message' => 'با تشکر از ثبت سفارش شما ، در اولین فرصت با شما تماس گرفته خواهد شد',
                    'type' => 'success'

                ]
            );

            $mm = ' درخواست آنالیز وب سایت ';
            $mm .= $request->address;
            $mm .= ' از طرف ';
            $mm .= $request->name;
            $mm .= ' شرکت ';
            $mm .= $request->company;
            $mm .= ' از شهر ';
            $mm .= $request->city;
            $mm .= ' با شماره تماس ';
            $mm .= $request->mobile;
            $mm .= ' _ ';
            $mm .= $request->telephone;
            $mm .= ' ثبت شد ';
            mail("info@adib-it.com", "در خواست آنالیز وبسایت", $mm);

            //todo

            return redirect()->back()->with('flash_message', 'با تشکر از ثبت سفارش شما ، در اولین فرصت با شما تماس گرفته خواهد شد');
        } catch (\Exception $e) {
            return redirect()->back()->with('err_message','خطایی رخ داده است، لطفا مجددا امتحان کنید!');
        }
//            return redirect()->back()->with(['status' => 'success', "message" => 'با تشکر از ثبت سفارش شما ، در اولین فرصت با شما تماس گرفته خواهد شد']);
//
//        } catch (\Exception $ERROR) {
//            return redirect()->back()->with(['status' => 'success', "message" => 'با تشکر از ثبت سفارش شما ، در اولین فرصت با شما تماس گرفته خواهد شد']);
////            echo $ERROR;
//        }
    }

    public function search_show(Request $request)
    {
        $article = Article::where('title', 'LIKE', '%' . $request->serach)->get();

        $product = Product::where('title', 'LIKE', '%' . $request->serach)->get();

        return view('search', compact('article', 'product'));
    }

    public function insertEmail(Request $request)
    {
        $to = "info@parniangostar.com";
        $subject = "درخواست وقت ملاقات";
        $message = 'نام و نام خانوادگی' . $request->name . 'شماره ثابت' . $request->telephone . 'شماره همراه' . $request->mobile;
        $from = "webp@gmail.com";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);

        Session::put('alert', [

                'message' => 'اطلاعات شما ثبت گردید ، مشاوران ما در اولین فرصت با شما تماس خواهند گرفت . باتشکر',
                'type' => 'success'

            ]
        );
        return redirect()->back();
    }

    public function template(Request $request)
    {
        $this->locale = session()->get('locale');

        $customers = Customer::where('lang', app()->getLocale());

        if ($request->type) {
            if ($request->type == 1) {
                $customers = $customers->where('wordpress', 1);
            }
            if ($request->type == 2) {
                $customers = $customers->where('laravel', 1);
            }
        }

        if ($request->filled('sort') && $request->sort == 'new') {
            $customers = $customers->orderByDesc('created_at');
        } elseif ($request->filled('sort') && $request->sort == 'old') {
            $customers = $customers->orderBy('created_at','asc');
        }else{
            $customers = $customers->orderBy('sort', 'asc');
        }


        if ($request->filled(['q', 'category'])) {
            $category = CustomerCategory::where('slug', $request->category)->first();

            $c_id = ($category) ? '%"'.$category->id.'"%' : '%%';

            $q = "%{$request->q}%";
            $customers = $customers->where('category_id','like',$c_id)->where('title','like',$q);//->orWhere('slug','liek',$q)->orWhere('description','like',$q)->orWhere('short_text','like',$q)

        }elseif ($request->filled('q')) {
            $q = "%{$request->q}%";
            $customers = $customers->where('title','like',$q)->orWhere('slug','like',$q);
        }elseif ($request->filled('category')) {
            $category = CustomerCategory::where('slug', $request->category)->first();
            if ($category) {
                $c_id = '%"'.$category->id.'"%';
                $customers = $customers->where('category_id','like',$c_id);
            }
        }

        $customers = $customers->get();


        $customers = $customers->filter(function ($customer) {
            if ($customer->type_id == 'null' || $customer->type_id == null) {
                return $customer;
            } elseif (in_array(1, json_decode($customer->type_id))) {
                return $customer;
            }
        });

        $customers = $customers->paginate(12);
        $categories = CustomerCategory::where('lang', $this->locale)->orderBy('sort_id', 'ASC')->get();


        $url = route('user-gallery', $this->locale);

        $locale = app()->getLocale();

        return view('front.portfolio.index', compact('customers', 'categories', 'url', 'locale'));
//        return view('gallery', compact('customers', 'categories', 'url'));
    }


    public function show_portfolio($locale, $slug)
    {
        $customer = Customer::where('slug', $slug)->where('lang', $locale)->orderBy('sort', 'desc')->first();

        if (!$customer) {
            return redirect()->route('user-gallery',$locale);
//            abort(404);
        }

        return view('front.portfolio.show', compact('customer'));
//        return view('customer', compact('customer'));
    }

//    public function iframe_id($id)
//    {
//        $item = Customer::find($id);
//        return view('gallery', compact('item'));
//    }
    public function templateCat($lang, $slug, Request $request)
    {
        $this->locale = session()->get('locale');

        $categories = CustomerCategory::where('lang', $this->locale)->orderBy('sort_id', 'ASC')->get();
        $cat = CustomerCategory::where('lang', $this->locale)->where('slug', $slug)->first();
        $customers = Customer::where('lang', $this->locale);

        if ($request->type) {
            if ($request->type == 1)
                $customers = $customers->where('wordpress', 1);

            if ($request->type == 2)
                $customers = $customers->where('laravel', 1);
        }

        $customers = $customers->with(['cats'])->orderByDesc('created_at')->get();
        $customersCollection = new Collection();

        if (is_null($cat))
            return redirect()->to('/');

        foreach ($customers as $customer) {


            if (count($customer->cats)) {
                if (count($customer->cats->where('category_id', $cat->id))) {
                    $customersCollection->push($customer);
                }
            }
        }

//        dd($customers,$customers->where('id',490));

        $customersCollection = $customersCollection->filter(function ($customer) {
            if ($customer->type_id == 'null' || $customer->type_id == null) {
                return $customer;
            } elseif (in_array(1, json_decode($customer->type_id))) {
                return $customer;
            }
        });
        $customers = $customersCollection->sortBy('sort')->paginate(12);
        $slugs = $cat->slug;

        $url = route('user-tem-cat', [$this->locale, $slugs]);
        return view('front.portfolio.index', compact('customers', 'categories', 'cat', 'slugs', 'url'))->with(['locale' => $this->locale]);
    }

    public function templateType($lang, $slug)
    {

        $this->locale = session()->get('locale');

        $types = CustomerType::all();
        $type = CustomerType::where('slug', $slug)->first();
        $customers = Customer::where('lang', $this->locale)->orderByDesc('created_at')->get();
        $customers = $customers->filter(function ($customer) use ($type) {
            if ($customer->type_id != 'null' && in_array($type->id, json_decode($customer->type_id))) {
                return $customer;
            }
        });
        $customers = $customers->paginate(12);
        if (is_null($type)) {

            return redirect()->to('/');

        }
        $slugs = $type->slug;
        return view('gallery_type', compact('customers', 'type', 'types', 'slugs'));
    }

    public function contact_us()
    {
        $locale = session()->get('locale');

        return view('front.contact_us', compact('locale'));

    }
    public function question()
    {
        $locale = session()->get('locale');

        return view('front.questions', compact('locale'));
    }
    public function webdesignde()
    {

        return view('landing.web-design.land');
    }
    public function webdesigntr()
    {

        return view('landing.web-design.landtr');
    }
}
