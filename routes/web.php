<?php

use App\Http\Controllers\sepatuController;
use Illuminate\Support\Facades\Route;

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
    return view('loginPage');
});
Route::get('/loginPage', function () {
    return view('loginPage');
});
Route::post('/loginPage', 'loginPage@validasi');

Route::get('/welcome', function () {
   return view('welcome');
});
Route::post('/welcome','registerController@add');
// Route::get('/add', function () {
//     return view('addShoes');
//  });
Route::get('/homePage',function(){
return view('homePage');
}
);
Route::get('/homePage', 'sepatuController@view')->name('home');

Route::get('/adminPage', 'sepatuController@view')->name('home');


Route::get('/detailPage/{blabla}', 'sepatuController@detail');
Route::post('/addCartID/{blabla}','cartController@addCart');


 Route::get('/editCart', function () {
    return view('editCart');
 });
Route::post('/delete/{blabla}','cartController@delete');
Route::post('/edit/{blabla}','cartController@editCart');

 Route::get('/addCart', 'cartController@view');
 Route::post('/checkout','cartController@checkout');
//  Route::post('/addCartID/{blabla}','cartController@edit');

//  Route::get('/editCart/{blabla}', 'cartController@detail');
 Route::post('/editCart/{blabla}', 'cartController@detail');

 Route::get('/viewCart', function () {
   return view('viewCart');
});
Route::get('/viewTransaction', 'tranController@view');
Route::get('/viewTransactionAdmin','tranController@viewAdmin');

Route::get('/addShoes', function () {
   return view('addShoes');
});
Route::get('/updatePage', function () {
   return view('updatePage');
});
Route::get('/adminPage', function () {
   return view('adminPage');

})->middleware('admin');
Route::get('/adminPage', 'sepatuController@view');

 Route::post('/addShoes', 'sepatuController@add');
//  Route::get('/addShoes', function () {
//     return view('addShoes');


// Route::get('/updatePage', function () {
//     return view('updatePage');
//  });

//  Route::put('/updatePage/{blabla}','updateController@update');
Route::get('/updatePage/{blabla}', 'updateController@detail');
Route::put('/updatePage/{blabla}','updateController@update');

 Route::get('/deletePage/{blabla}','deleteController@delete');

Route::get('/search','sepatuController@search');
Route::get('/searchA','sepatuController@searchA');




