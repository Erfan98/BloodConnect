<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

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
    return view('welcome');
});

// Route::get('/register',function(){
//     return view('register');
// });

// Route::post('/register',function(){
//     $request = new Request();
//     $name = request()->name;
//     $email = request()->email;
//     $password = bcrypt(request()->password);

//    $user = User::create([
//     'name'=>$name,
//     'email'=>$email,
//     'password'=>$password,
//    ]);
//     if($user){
//         return redirect('/')->with('message', 'success|Record updated.');
//     }
//     else{
//         return redirect('/')->with('message', 'failed|User not created.');
//     }
// });
