<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\CollectionController;


use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



// Route::get('/main', function () {
//     return view('/main');
// });


// Route::get('/myhtml', function () {
//     return view('myhtml');
// });




Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/courses', function () {
    return view('courses');
});

Route::get('/layouts/footer/{id}', function ( $post) {
   // return view('layouts.footer');
})->name('layouts.footer');// urls from named route

// Route::get('/discount', function(){
//     return 'some_discount_code_here';
// });
 


// Route::get('/discount', [DiscountController::class, 'discount'])->name('discountCode')->middleware('signed');


// Route::get('/unsubscribe/{user}', function (Request $request) {
//     if (! $request->hasValidSignature()) {
//         abort(401);
//     }
 
//     // ...
// })->name('unsubscribe');
Route::get('/discount', [DiscountController::class, 'discount']);



Route:: get('/log',function(){

    \Log::info('testing log');
});


Route::get('create-custom-log', function () {
  
    \Log::channel('itsolution')->info('rikin');
     
});



Route::get('/demofile', [DemoController::class ,'Listing_Data']);


Route::post('/demofile', [DemoController::class ,'store']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//--------------------------------------------------------------------------------------------------------------------------------------------

                                    //  Collection
//--------------------------------------------------------------------------------------------------------------------------------------------


Route::get('/collection',[CollectionController::class,'index']);


Route::post('/collection',[CollectionController::class,'store']);


Route::get('/collection',[CollectionController::class,'show']);
