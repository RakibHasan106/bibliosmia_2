<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\User\clientController;
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
    return view('user.index');
});



Route::controller(clientController::class)->group(function(){
    Route::get('/','index');
    //Route::get('/login','LogIn');
    Route::get('/signup','SignUp');
    Route::get('/aboutus','AboutUs');
    Route::get('/category/{id}/{slug}','CategoryDisplay')->name('categorydisplay');
    Route::get('/publisher/{id}/{slug}','PublisherDisplay')->name('publisherdisplay');
    Route::get('/author/{id}/{slug}','AuthorDisplay')->name('authordisplay');
    Route::get('/book/{id}/{slug}','BookPageDisplay')->name('bookpage');
    Route::post('/search','Search')->name('search');
    Route::get('/all-categories','ShowAllCategories')->name('showallcategories');
    Route::get('/all-authors','ShowAllAuthors')->name('showallauthors');
    Route::get('all-publishers','ShowAllPublishers')->name('showallpublishers');
});

Route::middleware(['auth','role:user'])->group(function(){
    Route::controller(clientController::class)->group(function(){
        Route::post('/add-to-cart','AddtoCart')->name('addtocart');
        Route::get('/cart','CartPageView')->name('cartpageview');
        Route::post('/cart','RemoveFromCart')->name('removefromcart');
        Route::get('/shipping-info','ShippingInfo')->name('shippingpage');
        Route::post('/confirm-checkout','ConfirmCheckout')->name('confirmcheckout');
        Route::post('/confirmorder','ConfirmOrder')->name('confirmorder');
        Route::get('user-account','UserAccount')->name('useraccount');
    });
    Route::get('/logout',function(){
        session()->invalidate();
    
        session()->regenerateToken();
    
        return redirect('/');
    });
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth','role:admin'])->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard','Index')->name('admindashboard');
    });
    
    Route::controller(AuthorController::class)->group(function(){
        Route::get('/admin/add-author','AddAuthor')->name('addauthor');
        Route::get('/admin/all-authors','AllAuthors')->name('allauthors');
        Route::post('/admin/store-author','StoreAuthor')->name('storeauthor');
        Route::get('/admin/delete-author/{id}','DeleteAuthor')->name('deleteauthor');
        Route::get('/admin/edit-author/{id}','EditAuthor')->name('editauthor');
        Route::post('/admin/update-author','UpdateAuthor')->name('updateauthor');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/all-category','Index')->name('allcategory');
        Route::get('/admin/add-category','AddCategory')->name('addcategory');
        Route::post('/admin/store-category','StoreCategory')->name('storecategory');
        Route::get('/admin/edit-category/{id}','EditCategory')->name('editcategory');
        Route::get('/admin/delete-category/{id}','DeleteCategory')->name('deletecategory');
        Route::post('/admin/update-category','UpdateCategory')->name('updatecategory');
    });
    
    Route::controller(PublisherController::class)->group(function(){
        Route::get('/admin/all-publishers','Index')->name('allpublishers');
        Route::get('/admin/add-publisher','AddPublisher')->name('addpublisher');
        Route::post('/admin/store-publisher','StorePublisher')->name('storepublisher');
        Route::get('/admin/edit-publisher/{id}','EditPublisher')->name('editpublisher');
        Route::post('/admin/update-publisher','UpdatePublisher')->name('updatepublisher');
        Route::get('/admin/delete-publisher/{id}','DeletePublisher')->name('deletepublisher');
    });
    
    Route::controller(BookController::class)->group(function(){
        Route::get('/admin/all-books','Index')->name('allbooks');
        Route::get('/admin/add-book','AddBook')->name('addbook');
        Route::post('/admin/store-book','StoreBook')->name('storebook');
        Route::get('/admin/delete-book/{id}','DeleteBook')->name('deletebook');
        Route::get('/admin/editboook/{id}','EditBook')->name('editbook');
        Route::post('/admin/updatebook','UpdateBook')->name('updatebook');

        Route::get('/admin/change-book-img/{id}','ChangeBookImg')->name('changebookimg');
        Route::post('/admin/update-book-img','UpdateBookImg')->name('updatebookimg');
    });

    Route::controller(OrderController::class)->group(function(){
        Route::get('/admin/pending-orders','PendingOrders')->name('pendingorders');
        Route::get('/admin/approve-order/{id}','ApproveOrders')->name('approveorder');
        Route::get('/admin/approved-orders','ApprovedOrders')->name('approvedorders');
        Route::get('/admin/cancel-order/{id}','CancelOrder')->name('cancelorder');
        Route::get('/admin/cancelled-orders','CancelledOrders')->name('cancelledorders');
        Route::get('admin/complete-order/{id}','CompleteOrder')->name('completeorder');
        Route::get('/admin/completed-orders','CompletedOrders')->name('completedorders');
    });

    Route::get('/log_out',function(){
        session()->invalidate();
    
        session()->regenerateToken();
    
        return redirect('/login');
    });
});



require __DIR__.'/auth.php';
