<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use Inertia\Inertia;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::view('login', 'back.auth.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
    });
    Route::group(['middleware' => 'admin.auth'], function () {


        Route::view('dashboard', 'back.dashboard')->name('admin.home');
        Route::post('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/settings', 'App\Http\Controllers\Admin\SettingsController@index')->name('settings.index');
        Route::post('settings/update', 'App\Http\Controllers\Admin\SettingsController@update')->name('settings.update');
        Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('dashboard');
        Route::resource('posts', 'App\Http\Controllers\Admin\PostsController');
        Route::get('logout', 'App\Http\Controllers\Admin\HomeController@logout')->name('auth.logout');
        Route::get('register', 'App\Http\Controllers\Admin\HomeController@register')->name('auth.register');
        Route::get('forgetpassword', 'App\Http\Controllers\Admin\HomeController@forget')->name('auth.forget');
        Route::get('posts', 'App\Http\Controllers\Admin\PostsController@index')->name('posts.index');
        Route::get('switch', 'App\Http\Controllers\Admin\PostsController@switch')->name('switch');
        Route::put('hot_posts', 'App\Http\Controllers\Admin\PostsController@hot_posts')->name('hot_posts');
        Route::get('posts/create', 'App\Http\Controllers\Admin\PostsController@create')->name('posts.create');
        Route::get('create/{post_id}', 'App\Http\Controllers\Admin\ImageController@create')->name('admin_image_add');
        Route::post('store/{post_id}', 'App\Http\Controllers\Admin\ImageController@store')->name('admin_image_store');
        Route::get('delete/{id}/{post_id}', 'App\Http\Controllers\Admin\ImageController@destroy')->name('admin_image_delete');
        Route::get('show', 'App\Http\Controllers\Admin\ImageController@show')->name('admin_image_show');
        // Category
        Route::get('/categories', 'App\Http\Controllers\Admin\CategoryController@index')->name('category.index');
        Route::post('/categories/create', 'App\Http\Controllers\Admin\CategoryController@create')->name('category.create');
        Route::post('/categories/update', 'App\Http\Controllers\Admin\CategoryController@update')->name('category.update');
        Route::post('/categories/delete', 'App\Http\Controllers\Admin\CategoryController@delete')->name('category.delete');
        Route::post('/posts/delete/{id}', 'App\Http\Controllers\Admin\PostsController@delete')->name('posts.delete');
        Route::get('/categories/getData', 'App\Http\Controllers\Admin\CategoryController@getData')->name('category.getdata');
        // Page Route
        Route::get('/pages', 'App\Http\Controllers\Admin\PageController@index')->name('pages.index');
        Route::get('/pages/create', 'App\Http\Controllers\Admin\PageController@create')->name('pages.create');
        Route::post('/pages/create', 'App\Http\Controllers\Admin\PageController@createpost')->name('pages.create.post');
        Route::get('/pages/update/{id}', 'App\Http\Controllers\Admin\PageController@update')->name('pages.update');
        Route::post('/pages/update/{id}', 'App\Http\Controllers\Admin\PageController@updatepost')->name('pages.update.post');
        Route::get('/pages/switch', 'App\Http\Controllers\Admin\PageController@switch')->name('pages.switch');
        Route::post('/pages/delete/{id}', 'App\Http\Controllers\Admin\PageController@delete')->name('pages.delete');
        // Settings

        // roles

        Route::get('/users', 'App\Http\Controllers\Admin\UserController@index')->name('users.index');
        Route::get('/users/create', 'App\Http\Controllers\Admin\UserController@create')->name('users.create');

        Route::get('/users/getData', 'App\Http\Controllers\Admin\UserController@getData')->name('users.getdata');
        Route::post('/users/create', 'App\Http\Controllers\Admin\UserController@store')->name('users.store');
        Route::get('/users/edit', 'App\Http\Controllers\Admin\UserController@edit')->name('users.edit');
        Route::post('/users/{user}/update', 'App\Http\Controllers\Admin\UserController@update')->name('users.update');
        Route::post('/users/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete')->name('users.delete');

        Route::get('userrole/{id}', 'App\Http\Controllers\Admin\UserController@user_roles')->name('admin_user_roles');
        Route::post('userrolestore/{id}', 'App\Http\Controllers\Admin\UserController@user_role_store')->name('admin_user_role_add');
        Route::get('userroledelete/{userid}/{roleid}', 'App\Http\Controllers\Admin\UserController@user_role_delete')->name('admin_user_role_delete');

        Route::get('/tags', 'App\Http\Controllers\TagController@index')->name('tags.index');
        Route::post('/tags/create', 'App\Http\Controllers\TagController@create')->name('tags.create');
        Route::post('/tags/update', 'App\Http\Controllers\TagController@update')->name('tags.update');
        Route::post('/tags/delete', 'App\Http\Controllers\TagController@delete')->name('tags.delete');
        Route::get('/tags/getData', 'App\Http\Controllers\TagController@getData')->name('tags.getdata');


    });
});

#Route::get('admin/panel','App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/


// Admin
//Route::get('admin/login', 'App\Http\Controllers\Admin\HomeController@login')->name('admin.auth.login');
//Route::post('admin/login', 'App\Http\Controllers\Admin\HomeController@login_post')->name('admin.auth.login.post');


Route::prefix('admin')->name('admin.')->middleware(['Admin', 'admin.guest', 'admin.auth'])->group(function () {
    //user roles

    // posts

});// User View


Route::middleware('admin.guest')->prefix('myuser')->name('myuser.')->group(function () {

    Route::get('/myprofile', [\App\Http\Controllers\Front\UserController::class, 'index'])->name('myprofile.index');
    Route::get('/myprofile', [\App\Http\Controllers\Front\UserController::class, 'edit'])->name('myprofile.edit');
    Route::put('/myprofile/{user}/update', [\App\Http\Controllers\Front\UserController::class, 'update'])->name('myprofile.update');
    Route::put('/users/{user}/update', 'App\Http\Controllers\Admin\UserController@update')->name('users.update');
    Route::get('posts', 'App\Http\Controllers\Front\PostsController@index')->name('myprofile.posts.index');
    Route::get('posts/comments', 'App\Http\Controllers\Front\PostsController@comments')->name('myprofile.posts.comments');
    Route::post('posts/delete/{comment_id}', 'App\Http\Controllers\Front\PostsController@commentDelete')->name('myprofile.commentdelete.post');

    Route::get('posts/create', 'App\Http\Controllers\Front\PostsController@create')->name('myprofile.create');
    Route::post('posts/create/store', 'App\Http\Controllers\Front\PostsController@store')->name('myprofile.create.post');
    Route::get('posts/{post_id}/edit', 'App\Http\Controllers\Front\PostsController@edit')->name('myprofile.edit.post');
    Route::put('posts/{post_id}/update', 'App\Http\Controllers\Front\PostsController@update')->name('myprofile.update.post');
    Route::post('posts/{post_id}/delete', 'App\Http\Controllers\Front\PostsController@delete')->name('myprofile.delete.post');
    Route::get('posts/create/{post_id}', 'App\Http\Controllers\Front\ImageController@create')->name('myprofile.image.post');
    Route::post('posts/create/{post_id}', 'App\Http\Controllers\Front\ImageController@store')->name('myprofile.image.store');
    Route::get('logout', [\App\Http\Controllers\Front\UserController::class, 'logout'])->name('myprofile.logout');
});
//      Route::get('edit/user',  [\App\Http\Controllers\Front\UserController::class, 'edit'])->name('user.edit');
//    Route::get('edit/user',  [\App\Http\Controllers\Front\UserController::class, 'update'])->name('user.update');

// Frontend View
Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('homepage');
Route::get('page', 'App\Http\Controllers\Front\HomepageController@index');
Route::get('/category/{category}', 'App\Http\Controllers\Front\HomepageController@category')->name('category');
Route::get('/{category}/{slug}', 'App\Http\Controllers\Front\HomepageController@single')->name('single');
Route::get('/contact', 'App\Http\Controllers\Front\HomepageController@contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\Front\HomepageController@postcontact')->name('post.contact');
Route::get('/{sayfa}', 'App\Http\Controllers\Front\HomepageController@page')->name('page');
Route::post('{post}/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.store');
Route::post('/getpost', 'App\Http\Controllers\Front\HomepageController@getpost')->name('getpost');
Route::get('/postlist/{search}', 'App\Http\Controllers\Front\HomepageController@postlist')->name('postlist');


