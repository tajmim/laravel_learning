<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control1;
use App\Models\User;


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


Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/noteligible', function () {
    return view('boyoskom');
});


Route::get('/eligible', function () {
    return view('mature');
})->middleware('age2');





Route::get('/gocontrol1agdhasgdagjdadajdajhdghahdj', [control1::class, 'index'])->name('go');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        //$users = User::all();
        $users = DB::table('users')->get();
        return view('dashboard',compact("users"));
    })->name('dashboard');
});