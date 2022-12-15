<?php

namespace App\Http\Controllers\Panel;

use App\Models\Setting;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'تماس ها';
        } elseif ('single') {
            return 'تماس';
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
        $contacts = Contact::orderByDesc('id')->get();
        return view('panel.contacts.index', compact('contacts'), ['title' => $this->controller_title('sum')]);
    }

    public function destroy($id)
    {
        $gallery = Contact::findOrFail($id);

        try {

            $gallery->delete();
            return redirect()->route('contact-list')->with('flash_message', 'تماس با ما با موفقیت حذف شد.');

        } catch (\Exception $e) {

            return redirect()->back();

        }
    }

}
