<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Notifications\Test;
use App\Models\User;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $locale = session()->get('locale');
        return view('landing.index',compact('locale'));
    }

    public function send_message(Request $request)
    {
        try {
            $user = User::where('email','info@adib-it.com')->first();
            $user->notify(new Test( $request->fullname, $request->preNumber.'-'.$request->number, $request->page, $request->email, $request->text ));
            return redirect()->back()->with('flash_message', 'پیام شما با موفقیت ارسال شد');
        } catch (\Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('err_message', 'مشکلی در ارسال پیام بوجود آمده،مجددا تلاش کنید');
        }
    }
    
    public function landing_one()
    {
        $locale = session()->get('locale');
        return view('landing.one',compact('locale'));
    }
    public function landing_three()
    {
        $locale = session()->get('locale');
        return view('landing.three',compact('locale'));
    }

    public function landing()
    {
        return view('front.landing.index');
    }
}
