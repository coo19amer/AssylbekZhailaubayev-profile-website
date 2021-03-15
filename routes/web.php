<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Message;
use App\Models\Post;

use App\Http\Controllers\BlogController;
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
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('message/add', function(){
    DB::table('message')->insert([
        'name' => 'Assylbek',
        'email' => 'coo19amer@gmail.com',
        'topic' => 'Working on project',
        'message' => 'What is the repository of project?'
    ]);
});

Route::get('message/find',function(){
    $message = Message::find(1);
    return $message;
    //return $message->name;

});

Route::get('post/add', function(){
    DB::table('posts')->insert([
        'title' => 'Lorem ipsum dolor sit amet.',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, dolorem!',
    ]);
});

Route::get('post',function(){
    $post = Post::find(1);
    return $post;
});

Route::get('blog', [BlogController::class,'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create',[BlogController::class, 'store'])->name('add-post');