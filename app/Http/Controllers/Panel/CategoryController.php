<?php

namespace App\Http\Controllers\Panel;

use App\Models\Setting;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'دسته بندی ها';
        } elseif ('single') {
            return 'دسته بندی';
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
        $categories = ProductCategory::where('parent_id', null)->with('children')->get();
        return view('panel.categories.index', compact('categories'), ['title' => $this->controller_title('sum')]);
    }

    /**
     * Sort Item.
     *
     * @param  \Illuminate\Http\Request $request
     */
    public function sort_item(Request $request)
    {
        $category_item_sort = json_decode($request->sort);
        $this->sort_category($category_item_sort, null);
    }

    /**
     * Sort ProductCategory.
     *
     *
     * @param $category_items
     * @param $parent_id
     */
    private function sort_category(array $category_items, $parent_id)
    {
        foreach ($category_items as $index => $category_item) {
            $item = ProductCategory::findOrFail($category_item->id);
            $item->sort_id = $index + 1;
            $item->parent_id = $parent_id;
            $item->save();
            if (isset($category_item->children)) {
                $this->sort_category($category_item->children, $item->id);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.categories.create', ['title' => $this->controller_title('single')]);
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
            'name' => 'required|max:191',
            'slug' => 'required|unique:product_categories|max:191'
        ]);

        try {

            ProductCategory::create($request->only('name', 'slug'));

            return redirect()->route('category-list')->with('flash_message', 'دسته بندی افزوده شد');

        } catch (\Exception $e) {

            return redirect()->back()->withInput();

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('panel.categories.edit', compact('category'), ['title' => $this->controller_title('single')]);
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
        $category = ProductCategory::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:191',
            'slug' => 'required|max:191|unique:product_categories,slug,' . $id
        ]);

        try {

            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->save();

            return redirect()->route('category-list')->with('flash_message', 'دسته بندی با موفقیت ویرایش شد.');

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
        $category = ProductCategory::findOrFail($id);

        if (count($category->children)){
            return redirect()->route('category-list')->with('err_message', 'دسته بندی شامل زیر دسته می باشد، قادر به حذف آن نمی باشید');
        }
        if (count($category->product)){
            return redirect()->route('category-list')->with('err_message', 'دسته بندی دارای محصول می باشد، اگر میخواهید آن را حذف کنید ابتدا محصولات آن را حذف کنید');
        }

        try {

            $category->delete();
            return redirect()->route('category-list')->with('flash_message', 'دسته بندی با موفقیت حذف شد.');

        } catch (\Exception $e) {

            return redirect()->back();

        }
    }
}
