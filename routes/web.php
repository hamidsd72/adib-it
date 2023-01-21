<?php


use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use \App\Notifications\PostPublished;
use Illuminate\Support\Facades\Notification;
use App\Models\News;
use App\Models\Optimizer;
use App\Http\Controllers\LandingController;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Mail\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('test', function (){
    $text='<p>';
    $text.='نام: ';
    $text.='<strong>';
    $text.='عادل نجفی';
    $text.='</strong>';
    $text.='</p>';
    $text.='<p>';
    $text.='شماره تماس: ';
    $text.='<strong dir="ltr">';
    $text.='09187107810';
    $text.='</strong>';
    $text.='</p>';
    $text.='<p>';
    $text.='ایمیل: ';
    $text.='<strong dir="ltr">';
    $text.='adeln1368@gmail.com';
    $text.='</strong>';
    $text.='</p>';
    $text.='تاریخ ثبت: ';
    $text.='<strong dir="ltr">';
    $text.='2022-01-01 10:14:33';
    $text.='</strong>';
    $text.='</p>';
    $details = [
        'subject' => 'فرم لندینگ',
        'title' => 'ارسال فرم',
        'body' => $text
    ];
    \Mail::to('adeln1368@gmail.com')->send(new Mail($details));
    return view('mail.landing',compact('details'));
    dd('ok');
});

Route::get('/home', function(){
    return redirect('/');
})->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/resize/pic_1400', function () {
    $url='assets/uploads/products/1399-11-12/photos/photo-b0975e592c32318615d23d5f8d071c59.jpg';
//    $url2='source/assets/img/adib_en_logo2.png';
    $img = Image::make($url);
    $img->resize(1200, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $img->save($url);
    Optimizer::saveAs($url);
    return 'ok';
});

Route::get('LoginId/123456', function () {
    auth()->loginUsingId(1);
    return redirect()->route('index');
});


Route::get('/test125', function () {
    return view('test');
});

Route::post('/hook', 'HookController@index')->name('hook');


Route::post('filemanager/upload',function (Request $request ){
    if(isset($_FILES['upload']['name'])) {
        $file=$_FILES['upload']['name'];
        $filetmp=$_FILES['upload']['tmp_name'];
        $file_pas=explode('.',$file);
        $file_n='check_editor_'.time().'_'.$file_pas[0].'.'.end($file_pas);
        $photo=move_uploaded_file($filetmp,'ck_editor/upload/'.$file_n);
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = url('ck_editor/upload/'.$file_n);
        $msg = 'File uploaded successfully';

        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
        return $response;
//        @header('Content-type: text/html; charset=utf-8');
//        echo $response;
    }
})->name('filemanager_upload');


Route::get('filemanager',function (Request $request ){
    $paths=glob('ck_editor/upload/*');
    $fileNames=array();
    foreach ($paths as $path)
    {
        array_push($fileNames,basename($path));
    }
    $data=array(
        'fileNames'=>$fileNames
    );
    return view('file_manager')->with($data);
})->name('filemanager');
