<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\Front\AboutController;

use App\Http\Controllers\Front\ServiceController;

use App\Http\Controllers\Front\PortfolioController;

use App\Http\Controllers\Front\ClientController;

use App\Http\Controllers\Front\ContactController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\PageController;

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

Artisan::call('cache:clear');
Artisan::call('route:clear');
Artisan::call('view:clear');

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);

Route::get('/about-us', [App\Http\Controllers\Front\AboutController::class, 'index']);

Route::get('/services', [App\Http\Controllers\Front\ServiceController::class, 'index']);

Route::get('/portfolio', [App\Http\Controllers\Front\AboutController::class, 'index']);

Route::get('/clients', [App\Http\Controllers\Front\AboutController::class, 'index']);

Route::get('/contact-us', [App\Http\Controllers\Front\ContactController::class, 'index']);



//admin

Route::get('/admin', [UserController::class, 'index']);

Route::post('/admin', [UserController::class, 'login']);

Route::get('/admin/logout', [UserController::class, 'logout']);

Route::middleware([App\Http\Middleware\Login::class])->group(function(){

   Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

   Route::get('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'index']);

   Route::post('/admin/options', [App\Http\Controllers\Admin\OptionController::class, 'update']);


   Route::get('/admin/pages', [App\Http\Controllers\Admin\PageController::class, 'index']);

   Route::get('/admin/pages/edit/{id}', [App\Http\Controllers\Admin\PageController::class, 'edit']);

   Route::post('/admin/pages/{id}', [App\Http\Controllers\Admin\PageController::class, 'update']);







   /*Route::get('/admin/city', [App\Http\Controllers\Admin\CityController::class, 'index']);

   Route::get('/admin/city/create', [App\Http\Controllers\Admin\CityController::class, 'create']);

   Route::post('/admin/city/store', [App\Http\Controllers\Admin\CityController::class, 'store']);

   Route::get('/admin/city/edit/{id}', [App\Http\Controllers\Admin\CityController::class, 'edit']);

   Route::post('/admin/city/update/{id}', [App\Http\Controllers\Admin\CityController::class, 'update']);

   Route::get('/admin/city/destroy/{id}', [App\Http\Controllers\Admin\CityController::class, 'destroy']);

   Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);

   Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create']);

   Route::post('/admin/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store']);

   Route::get('/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
   Route::post('/admin/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);

   Route::get('/admin/category/destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

   Route::get('/admin/brand', [App\Http\Controllers\Admin\BrandController::class, 'index']);

   Route::get('/admin/brand/create', [App\Http\Controllers\Admin\BrandController::class, 'create']);

   Route::post('/admin/brand/store', [App\Http\Controllers\Admin\BrandController::class, 'store']);

   Route::get('/admin/brand/edit/{id}', [App\Http\Controllers\Admin\BrandController::class, 'edit']);

   Route::post('/admin/brand/update/{id}', [App\Http\Controllers\Admin\BrandController::class, 'update']);

   Route::get('/admin/brand/destroy/{id}', [App\Http\Controllers\Admin\BrandController::class, 'destroy']);

   Route::get('/admin/service', [App\Http\Controllers\Admin\ServiceController::class, 'index']);

   Route::get('/admin/service/create', [App\Http\Controllers\Admin\ServiceController::class, 'create']);

   Route::post('/admin/service/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);

   Route::get('/admin/service/edit/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'edit']);

   Route::post('/admin/service/update/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'update']);

   Route::get('/admin/service/destroy/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy']);

   Route::get('/admin/blogcategory', [App\Http\Controllers\Admin\BlogCategoryController::class, 'index']);

   Route::get('/admin/blogcategory/create', [App\Http\Controllers\Admin\BlogCategoryController::class, 'create']);

   Route::post('/admin/blogcategory/store', [App\Http\Controllers\Admin\BlogCategoryController::class, 'store']);

   Route::get('/admin/blogcategory/edit/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'edit']);

   Route::post('/admin/blogcategory/update/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'update']);

   Route::get('/admin/blogcategory/destroy/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'destroy']);

   Route::get('/admin/blog', [App\Http\Controllers\Admin\BlogController::class, 'index']);

   Route::get('/admin/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create']);

   Route::post('/admin/blog/store', [App\Http\Controllers\Admin\BlogController::class, 'store']);

   Route::get('/admin/blog/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit']);

   Route::post('/admin/blog/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update']);

   Route::get('/admin/blog/destroy/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy']);*/


});

#Artisan::call('');
