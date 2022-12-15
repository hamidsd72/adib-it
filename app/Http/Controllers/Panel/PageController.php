<?php

namespace App\Http\Controllers\Panel;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller {

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'صفحات';
        } elseif ('single') {
            return 'صفحه';
        }
    }

    public function controller_paginate()
    {
        return Setting::select('paginate')->latest()->firstOrFail()->paginate;
    }

    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index()
    {
        $categories = Page::all();
        return view('panel.pages.index', compact('categories'), ['title' => $this->controller_title('sum')]);
    }

    public function create()
    {
        return view('panel.pages.create', ['title' => $this->controller_title('single')]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
        ]);

        try {
            Page::create($request->all());
            return redirect()->route('page.index')->with('flash_message', 'صفحه افزوده شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $category = Page::findOrFail($id);
        return view('panel.pages.edit', compact('category'), ['title' => $this->controller_title('single')]);
    }

    public function update(Request $request, $id)
    {
        $category = Page::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:191',
        ]);

        try {

            $category->title   = $request->title;
            $category->status = $request->status;
            $category->save();

            return redirect()->route('page.index')->with('flash_message', 'صقحه با موفقیت ویرایش شد.');

        } catch (\Exception $e) {

            return redirect()->back()->withInput();

        }

    }

    public function destroy($id)
    {
        $category = Page::findOrFail($id);

        if ($category->contents->count() ) {
            return redirect()->route('page.index')->with('err_message', 'صقحه شامل محتوا می باشد، قادر به حذف آن نمی باشید');
        }

        try {
            $category->delete();
            return redirect()->route('page.index')->with('flash_message', 'صقحه با موفقیت حذف شد.');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
