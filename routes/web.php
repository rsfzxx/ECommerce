<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\livewire\CategoryComponent;
use App\Http\livewire\SearchComponent;
use App\Http\livewire\WishlistComponent;
use App\Http\livewire\CartComponent;
use App\Http\livewire\CheckOutComponent;
use App\Http\livewire\ShopComponent;
use App\Http\livewire\DetailsComponent;
use App\Http\livewire\HomeComponent;
use App\Http\livewire\user\UserDashboardComponent;
use App\Http\livewire\admin\AdminDashboardComponent;
use App\Http\livewire\admin\AdminCategoriesComponent;
use App\Http\livewire\admin\AdminAddCategoryComponent;
use App\Http\livewire\admin\AdminEditCategoryComponent;
use App\Http\livewire\admin\AdminProductComponent;
use App\Http\livewire\admin\AdminAddProductComponent;
use App\Http\livewire\admin\AdminEditProductComponent;
use App\Http\livewire\admin\AdminHomeSliderComponent;
use App\Http\livewire\admin\AdminAddHomeSlideComponent;
use App\Http\livewire\admin\AdminEditHomeSlideComponent;
use App\Http\livewire\admin\Coupons;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');

Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

Route::get('/search',SearchComponent::class)->name('product.search');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add',AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');
    Route::get('/admin/coupons', Coupons::class)->name('admin.coupons');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';