<?php
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนู User
 Route::get('admin/user/index',[Usercontroller::class, 'user']) ->name('u.index');

 //เมนู Product
 Route::get('admin/product/index',[Productcontroller::class, 'product']) ->name('p.index');
 Route::get('admin/product/create',[Productcontroller::class, 'create']) ->name('p.create');

 //เมนู catagory
 Route::get('admin/catagory/index',[Catagorycontroller::class, 'catagory']) ->name('c.index');
 Route::get('admin/catagory/create',[Catagorycontroller::class, 'catagory']) ->name('c.create');
