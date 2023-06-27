<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:user'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth','role:admin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard','Index')->name('admindashboard');
    });
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/all-category','Index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
        Route::post('/admin/store-category','StoreCategory')->name('storecategory');
    });
    Route::controller(PublisherController::class)->group(function(){
        Route::get('/admin/all-publishers','Index')->name('allpublishers');
        Route::get('/admin/add-publisher','AddPublisher')->name('addpublisher');
    });
    Route::controller(BookController::class)->group(function(){
        Route::get('/admin/all-books','Index')->name('allbooks');
        Route::get('/admin/add-book','AddBook')->name('addbook');
    });
    Route::controller(OrderController::class)->group(function(){
        Route::get('/admin/pending-orders','PendingOrders')->name('pendingorders');
        Route::get('/admin/completed-orders','CompletedOrders')->name('completedorders');
        Route::get('/admin/cancelled-orders','CancelledOrders')->name('cancelledorders');
    });
});

require __DIR__.'/auth.php';
