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

// Route::get('/', function () {
//     return 'hello world';
// });

// Route::get('/user/{id}',function($id){
//     return 'user_id:'.$id;
// });

//1號路由
// Route::get('/users/{id?}',function($id=null){
//     if(!is_null($id)){
//         //如果有id就重導向至/student/profile
//         return redirect()->route('profile');
//     }else{
//         return '無使用者資料';
//     }
// });


//2號路由
// Route::get('/student/profile',function(){
//     return '已查到使用者資料';
// })->name('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // 使用 first 和 second 中間件
//     });

//     Route::get('user/profile', function () {
//         // 使用 first 和 second 中間件
//     });
// });

//web.php

Route::resource('news','test');


// Route::get('user/{id}', 'test');

// path routes/web.php
Route::get('/hello/{id?}','test@show_id');

Route::get('/insert',function(){
    DB::insert('insert into firstproject(title,description,email) values(?, ?, ?)',['最新消息','這是一則勁爆的消息','']);
});

// Route::get('/read', function(){
//     $results = DB::select('select * from firstproject where id = ?',[1]);
//     foreach($results as $new){
//         return $new->description;
//     }
// });

Route::get('/update',function(){
    $updated = DB::update('update firstproject set title = "更新最新消息" where id = ?',[1]);
    return $updated;
});

Route::get('/delete',function(){
    $deleted = DB::delete('delete from firstproject where id = ?',[1]);
    return $deleted;
});

use App\Firstproject;

Route::get('/read',function(){
    $posts = Firstproject::all();
    
    foreach($posts as $post){
        return $post->description;
    };
});

Route::get('/find',function(){
    $post = Firstproject::find(2);
    return $post;
});

Route::get('/findwhere', function(){
    // $post = Firstproject::where('id',2)->orderBy('title','desc')->take(1)->get();
    $post = Firstproject::where('id','>',0)->orderBy('title','desc')->get();
    return $post;
});

Route::get('/inserdata',function(){
    $post = new Firstproject;
    $post->title = 'goodjob';
    $post->description = '這是一則描述';
    $post->email = '123@mail';
    $post->save();
});

Route::get('/create', function(){
    Firstproject::create(['title'=>'利用create新增的','description'=>'create的描述','email'=>'456@mail']);
});