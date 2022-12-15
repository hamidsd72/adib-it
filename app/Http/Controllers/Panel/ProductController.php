<?php


namespace App\Http\Controllers\Panel;


use App\Models\ProductCategory;

use App\Models\Photo;

use App\Models\Setting;

use App\Models\Product;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;


class ProductController extends Controller

{

    public function controller_title($type)

    {

        if ($type == 'sum') {

            return 'لیست خدمات (منوی فوتر)';

        } elseif ('single') {

            return 'خدمات';

        }

    }


    public function controller_paginate()

    {

        $settings = Setting::select('paginate')->latest()->firstOrFail();

        return $settings->paginate;

    }


    public function __construct()

    {

        $this->middleware(['auth', 'isAdmin']);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {
        $products = Product::where('lang', session()->get('locale'))->orderByDesc('created_at')->paginate($this->controller_paginate());
        return view('panel.product.index', compact('products'), ['title' => $this->controller_title('sum')]);

    }


    public function create()

    {

        $categories = ProductCategory::all();

        return view('panel.product.create', compact('categories'), ['title' => $this->controller_title('single')]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)

    {


        $this->validate($request, [

            'title' => 'required|max:191',

            'slug' => 'required|unique:products|max:191',

            'short_text' => 'required',

            'photo' => 'required',

            'text' => 'required',

            'tags' => 'required',

            'description' => 'required'

        ]);


        $post = Product::create($request->only('title', 'slug', 'short_text', 'text', 'tags', 'description', 'title_page', 'part2_title', 'part2_description', 'part3_title', 'part3_description', 'part4_r_title', 'part4_r_description', 'part4_l1_title', 'part4_l1_description', 'part4_l2_title', 'part4_l2_description', 'part4_l3_title', 'part4_l3_description'));
        $post->lang = session()->get('locale');
        $post->save();


        if ($request->hasFile('photo')) {

            $photo = new Photo();

            $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

            $post->photo()->save($photo);

        }
        if ($request->hasFile('part2_photo')) {
            $post->part2_photo = file_store($request->part2_photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
        }
        $post->update();

        return redirect()->route('product-list')->with('flash_message', 'صفحه داینامیک با موفقیت افزوده شد.');

    }


    public function edit($id)

    {

        $item = Product::find($id);

        $categories = ProductCategory::all();

        return view('panel.product.edit', compact('item', 'categories'), ['title' => $this->controller_title('single')]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {

        $article = Product::findOrFail($id);

        try {

            $article->title = $request->title;

            $article->slug = $request->slug;

            $article->short_text = $request->short_text;



            $article->text = $request->text;

            $article->tags = $request->tags;

            $article->description = $request->description;
            $article->part2_title = $request->part2_title;
            $article->part2_description = $request->part2_description;
            $article->part3_title = $request->part3_title;
            $article->part3_description = $request->part3_description;
            $article->part4_r_title = $request->part4_r_title;
            $article->part4_r_description = $request->part4_r_description;
            $article->part4_l1_title = $request->part4_l1_title;
            $article->part4_l1_description = $request->part4_l1_description;
            $article->part4_l2_title = $request->part4_l2_title;
            $article->part4_l2_description = $request->part4_l2_description;
            $article->part4_l3_title = $request->part4_l3_title;
            $article->part4_l3_description = $request->part4_l3_description;

            $article->title_page = $request->title_page;


            if ($request->hasFile('part2_photo')) {
                $article->part2_photo = file_store($request->part2_photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
            }

            $article->update();

            if ($request->hasFile('photo')) {

                if ($article->photo) {

                    $old_path = $article->photo->path;

                    File::delete($old_path);

                    $article->photo->delete();

                    $photo = new Photo();

                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

                    $article->photo()->save($photo);

                } else {

                    $photo = new Photo();

                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');

                    $article->photo()->save($photo);

                }

            }





            return redirect()->route('product-list')->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');



        } catch (\Exception $e) {



            return redirect()->back()->withInput();



        }


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {

        $category = Product::findOrFail($id);


        try {


            $category->delete();

            return redirect()->route('product-list')->with('flash_message', 'محصول با موفقیت حذف شد.');


        } catch (\Exception $e) {


            return redirect()->back();


        }

    }

}
