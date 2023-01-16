<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Dompdf\Dompdf;

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

Route::get('/', function () {
    return view('front',['users'=>User::all()]);
});
Route::get('/database', function () {
    return view('welcome',['users'=>User::all()]);
});

Route::get('/card', function () {
     return view("idcard");
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::post('/filter',function(Request $request){
   // return $request->district;

    if($request->district==null){

       // dd("if block");
        $user = User::where('group',$request->group)
        ->get();
        return view('welcome',['users'=>$user]);
    }
    if($request->group==null){
       // dd("else block");
        $user = User::where('district',$request->district)
        ->get();
        return view('welcome',['users'=>$user]);
    }
    else{
        $user = User::where('district',$request->district)
        ->where('group',$request->group)
        ->get();
        return view('welcome',['users'=>$user]);
    }


});

// Route::post('/filter',function(Request $request){
//     return $request->all();
// });

require __DIR__.'/auth.php';
