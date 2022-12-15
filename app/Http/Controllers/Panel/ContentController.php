<?php

namespace App\Http\Controllers\Panel;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ContentController extends Controller {

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'محتوا';
        } elseif ('single') {
            return 'محتوا';
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
        $categories = Content::orderBy('page_id');
        return view('panel.contents.index', compact('categories'), ['title' => $this->controller_title('sum')]);
    }

    public function show($id)
    {
        $categories = Content::where('page_id',$id)->orderBy('section')->get();
        return view('panel.contents.index', compact('categories','id'), ['title' => $this->controller_title('sum')]);
    }

    public function create($id=null)
    {
        return view('panel.contents.create', compact('id'), ['title' => $this->controller_title('single')]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => 'nullable|max:255',
            'description'   => 'nullable',
            'status'        => 'required',
            'section'       => 'required',
            'part'          => 'required',
            'sort'          => 'required',

        ]);

        try {
            $category = new Content();
            $category->page_id     = $request->page_id;
            $category->status      = $request->status;
            $category->title       = $request->title;
            $category->link        = $request->link;
            $category->description = $request->description;
            $category->section     = $request->section;
            $category->part        = $request->part;
            $category->sort        = $request->sort;
            $category->color       = $request->color;

            if ($request->hasFile('pic')) {
                $category->pic = file_store($request->pic, 'source/asset/uploads/content/data/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'pic-');
            }
            
            $category->save();
            return redirect()->route('content.show',$request->page_id )->with('flash_message', 'محتوا افزوده شد');
        } catch (\Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $category = Content::findOrFail($id);
        return view('panel.contents.edit', compact('category'), ['title' => $this->controller_title('single')]);
    }

    public function update(Request $request, $id) {
        $category = Content::findOrFail($id);
        $this->validate($request, [
            'title'         => 'nullable|max:255',
            'description'   => 'nullable',
            'status'        => 'required',
            'section'       => 'required',
            'part'          => 'required',
            'sort'          => 'required',
        ]);

        try {
            $category->status      = $request->status;
            $category->title       = $request->title;
            $category->link        = $request->link;
            $category->description = $request->description;
            $category->section     = $request->section;
            $category->part        = $request->part;
            $category->sort        = $request->sort;
            $category->color       = $request->color;

            if ($request->hasFile('pic')) {
                if ($category->pic != null) {
                    File::delete($category->pic);
                }
                $category->pic = file_store($request->pic, 'source/asset/uploads/content/data/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'pic-');
            }

            $category->save();
            return redirect()->route('content.show',$category->page_id )->with('flash_message', 'محتوا با موفقیت ویرایش شد.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id) {
        $category = Content::findOrFail($id);
        try {
            if ($category->pic) File::delete($category->pic);
            $category->delete();
            return redirect()->route('content.show',$category->page_id )->with('flash_message', 'محتوا با موفقیت حذف شد.');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
