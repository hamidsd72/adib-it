<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class PanelController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'داشبورد';
        } elseif ('single') {
            return 'داشبورد';
        }
    }

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.index', ['title' => $this->controller_title('sum')]);
    }

}
