<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function (){
   return view('home');
});
Route::get('whats-new', function (){
   return view('whats-new');
});
Route::get('whats-hot', function (){
   return view('whats-hot');
});
Route::get('contact-us', function (){
    return view('contact-us');
});

//admin part
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', function (){
        $user = Auth::user();
        if ($user->is_user()){
            return redirect('admin/downloaded');
        }
        else {
            return view('admin.dashboard');
        }
    });
    Route::get('add-videos', 'VideoListController@showAddboard')->name('add-video');
    Route::post('add-videos', 'VideoListController@addVideo');

    Route::get('edit-delete', function (){
        return view('admin.edit');
    })->name('edit-delete');
    Route::get('manage-users', function (){
        return view('admin.manage');
    })->name('user-manage');
    Route::get('change-password', function (){
        return view('admin.change');
    })->name('change-password');
    Route::get('downloaded', function (){
       return view('admin.downloaded');
    })->name('downloaded-video');
});
