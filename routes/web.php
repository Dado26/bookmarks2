<?php

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
Route::get('/', 'WelcomeController@welcome')->name('welcome'); 
//Route::get('cool', 'WelcomeController@cool')->name('cool');
Route::get('/contact', 'WelcomeController@contact')->name('contact'); 
Route::post('/contact', 'WelcomeController@contact_post')->name('contact_post'); 

Route::get('/contact1', 'ContactController@showForm')->name('contact1'); 
Route::post('/contact1', 'ContactController@sendEmailAttempt')->name('send_email_attempt'); 



Route::group(['middleware'=>'auth'], function(){
Route::resource('bookmarks2','bookmark2Controller');

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@logout')->name('logout2');
Route::get('/cool', 'HomeController@cool')->name('cool');
Route::post('/cool', 'HomeController@logout')->name('logout');

Route::get('/knjige/{id}', function($id){
  $knjige = App\User::find($id);
  //echo $knjige->bookmarks2 . ' <br>';
  foreach($knjige->bookmarks2 as $book)
  echo $book->url.'<br>';
  
  
    
});
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
