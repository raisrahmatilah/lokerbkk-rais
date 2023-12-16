<?php


use App\Http\Controllers\LoginCont;
use App\Http\Controllers\LowonganCont;
use App\Http\Controllers\UserCont;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginCont::class, 'index'])->name('login');
    Route::post('/login', [LoginCont::class, 'login']);

    Route::post('/register', [LoginCont::class, 'register']);
    Route::get('/register', [LoginCont::class, 'showregister']);
});


Route::get('/home', function(){
    return redirect('/user');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/user',[UserCont::class, 'index'])->middleware('UserAkses:alumni');
    Route::get('/admin/user ',[UserCont::class, 'admin'])->middleware('UserAkses:admin');
    Route::get('/admin/user/tbl',[UserCont::class ,'tbladmin'])->middleware('UserAkses:admin');
    Route::get('/admin/user/tblalumni',[UserCont::class ,'tblalumni'])->middleware('UserAkses:admin');
    Route::get('/dataLoker',[UserCont::class,'data'])->middleware('UserAkses:admin');
    Route::get('/lowongan', [LowonganCont::class, 'index'])->middleware('UserAkses:alumni');
    Route::get('/logout', [LoginCont::class, 'logout']);    
});

Route::post('/lowongan', [LowonganCont::class, 'pasang']);



