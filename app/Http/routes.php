<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// auth
Route::group(['prefix' => 'auth'], function (){
    Route::get('/login', 'AuthController@login');
    Route::post('/login', 'AuthController@aksiLogin');
    Route::get('/register', 'AuthController@register');
    Route::post('/register', 'AuthController@aksiRegister');
});

// auth with middleware
Route::group(['prefix' => 'auth'], function (){
    Route::get('/logout', function (){
        Auth::logout();
        return redirect('auth/login');
    });
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/', function () {
        return view('welcome');
    });
    // jenis
    Route::get('/jenis', 'JenisController@index');
    Route::get('/jenis/add', 'JenisController@tambah');
    Route::get('/jenis/{id}', 'JenisController@detail');
    Route::get('/jenis/{id}/hapus', 'JenisController@hapus');
    Route::post('/jenis', 'JenisController@simpan');
    Route::post('/jenis/update', 'JenisController@ubah');
});

// untuk kebutuhan api mir, bisa di tes di postman
Route::group(['prefix' => 'api'], function (){
   Route::get('jenis', 'Api\JenisController@index');
   Route::get('jenis/{id}', 'Api\JenisController@detail');
   Route::get('jenis/{id}/hapus', 'Api\JenisController@hapus');
   Route::post('jenis', 'Api\JenisController@simpan');
   Route::post('jenis/update', 'Api\JenisController@ubah');
});
