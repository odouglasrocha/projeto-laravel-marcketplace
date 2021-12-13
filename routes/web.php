<?php

use App\Models\User; 
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\CategoryHeaderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\Slider2Controller;
use App\Http\Controllers\Backend\SliderDotController;
use App\Http\Controllers\Backend\SliderIntro2Controller;
use App\Http\Controllers\Backend\SliderIntroImage1DotController;
use App\Http\Controllers\Backend\SliderIntroImage2DotController;
use App\Http\Controllers\Backend\SliderIntro1Controller;
use App\Http\Controllers\Backend\SliderIntroImage1Controller;
use App\Http\Controllers\Backend\SliderIntroImage2Controller;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\AdminUserController;
  
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeBlogController;

use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\User\ReviewController;

use App\Http\Controllers\User\AllUserController;

use App\Http\Controllers\Frontend\ShopController;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');


// Admin All Routes 

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

}); // end Middleware admin

// User ALL Routes

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

Route::get('/', [IndexController::class, 'index']);
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');

Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');

Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');

Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');


// Admin Brand All Routes 

Route::prefix('brand')->group(function(){

Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');

Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');

Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');

Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');

Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');
    
    });

    // Admin Category all Routes  
Route::prefix('category')->group(function(){

Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

// Admin Sub Category All Routes

Route::get('/sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');

Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');

Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');

Route::post('/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');

Route::get('/sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');


// Admin Sub->Sub Category All Routes

Route::get('/sub/sub/view', [SubCategoryController::class, 'SubSubCategoryView'])->name('all.subsubcategory');

Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

Route::get('/sub-subcategory/ajax/{subcategory_id}', [SubCategoryController::class, 'GetSubSubCategory']);

Route::post('/sub/sub/store', [SubCategoryController::class, 'SubSubCategoryStore'])->name('subsubcategory.store');

Route::get('/sub/sub/edit/{id}', [SubCategoryController::class, 'SubSubCategoryEdit'])->name('subsubcategory.edit');

Route::post('/sub/update', [SubCategoryController::class, 'SubSubCategoryUpdate'])->name('subsubcategory.update');

Route::get('/sub/sub/delete/{id}', [SubCategoryController::class, 'SubSubCategoryDelete'])->name('subsubcategory.delete');

   });

 // Admin Category_header all Routes  
Route::prefix('categoryheader')->group(function(){

Route::get('/view', [CategoryHeaderController::class, 'CategoryHeaderView'])->name('all.categoryheader');

Route::post('/store', [CategoryHeaderController::class, 'CategoryHeaderStore'])->name('categoryheader.store');

Route::get('/edit/{id}', [CategoryHeaderController::class, 'CategoryHeaderEdit'])->name('categoryheader.edit');

Route::post('/update/{id}', [CategoryHeaderController::class, 'CategoryHeaderUpdate'])->name('categoryheader.update');

Route::get('/delete/{id}', [CategoryHeaderController::class, 'CategoryHeaderDelete'])->name('categoryheader.delete');

});


   // Admin Products All Routes 

Route::prefix('product')->group(function(){

Route::get('/add', [ProductController::class, 'AddProduct'])->name('add-product');

Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');
Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');

Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');

Route::post('/data/update', [ProductController::class, 'ProductDataUpdate'])->name('product-update');

Route::post('/image/update', [ProductController::class, 'MultiImageUpdate'])->name('update-product-image');

Route::post('/thambnail/update', [ProductController::class, 'ThambnailImageUpdate'])->name('update-product-thambnail');

Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('product.multiimg.delete');

Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product.inactive');

Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');

Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
     
    });

    // Admin Slider All Routes 

Route::prefix('slider')->group(function(){

Route::get('/view', [SliderController::class, 'SliderView'])->name('manage-slider');

Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');

Route::get('/edit/{id}', [SliderController::class, 'SliderEdit'])->name('slider.edit');

Route::post('/update', [SliderController::class, 'SliderUpdate'])->name('slider.update');

Route::get('/delete/{id}', [SliderController::class, 'SliderDelete'])->name('slider.delete');

Route::get('/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');

Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');
    
    });

    // Admin Slider2 All Routes 

Route::prefix('slider2')->group(function(){

Route::get('/view', [Slider2Controller::class, 'Slider2View'])->name('manage-slider2');

Route::post('/store', [Slider2Controller::class, 'Slider2Store'])->name('slider2.store');

Route::get('/edit/{id}', [Slider2Controller::class, 'Slider2Edit'])->name('slider2.edit');

Route::post('/update', [Slider2Controller::class, 'Slider2Update'])->name('slider2.update');

Route::get('/delete/{id}', [Slider2Controller::class, 'Slider2Delete'])->name('slider2.delete');

Route::get('/inactive/{id}', [Slider2Controller::class, 'Slider2Inactive'])->name('slider2.inactive');

Route::get('/active/{id}', [Slider2Controller::class, 'Slider2Active'])->name('slider2.active');
        
        });

         // Admin Sliderdot All Routes 

Route::prefix('sliderdot')->group(function(){

Route::get('/view', [SliderDotController::class, 'SliderDotView'])->name('manage-sliderdot');

Route::post('/store', [SliderDotController::class, 'SliderDotStore'])->name('sliderdot.store');

Route::get('/edit/{id}', [SliderDotController::class, 'SliderDotEdit'])->name('sliderdot.edit');

Route::post('/update', [SliderDotController::class, 'SliderDotUpdate'])->name('sliderdot.update');

Route::get('/delete/{id}', [SliderDotController::class, 'SliderDotDelete'])->name('sliderdot.delete');

Route::get('/inactive/{id}', [SliderDotController::class, 'SliderDotInactive'])->name('sliderdot.inactive');

Route::get('/active/{id}', [SliderDotController::class, 'SliderDotActive'])->name('sliderdot.active');
            
            });


            // Admin Slider Intro2 All Routes 

Route::prefix('slider-intro1')->group(function(){

Route::get('/view', [SliderIntro1Controller::class, 'SliderIntro1View'])->name('manage-slider-intro1');

Route::post('/store', [SliderIntro1Controller::class, 'SliderIntro1Store'])->name('slider-intro1.store');

Route::get('/edit/{id}', [SliderIntro1Controller::class, 'SliderIntro1Edit'])->name('slider-intro1.edit');

Route::post('/update', [SliderIntro1Controller::class, 'SliderIntro1Update'])->name('slider-intro1.update');

Route::get('/delete/{id}', [SliderIntro1Controller::class, 'SliderIntro1Delete'])->name('slider-intro1.delete');

Route::get('/inactive/{id}', [SliderIntro1Controller::class, 'SliderIntro1Inactive'])->name('slider-intro1.inactive');

Route::get('/active/{id}', [SliderIntro1Controller::class, 'SliderIntro1Active'])->name('slider-intro1.active');
        
        });

         // Admin slider-introimage1 All Routes 

Route::prefix('slider-introimage1')->group(function(){

Route::get('/view', [SliderIntroImage1Controller::class, 'SliderIntroImage1View'])->name('manage-slider-introimage1');

Route::post('/store', [SliderIntroImage1Controller::class, 'SliderIntroImage1Store'])->name('slider-introimage1.store');

Route::get('/edit/{id}', [SliderIntroImage1Controller::class, 'SliderIntroImage1Edit'])->name('slider-introimage1.edit');

Route::post('/update', [SliderIntroImage1Controller::class, 'SliderIntroImage1Update'])->name('slider-introimage1.update');

Route::get('/delete/{id}', [SliderIntroImage1Controller::class, 'SliderIntroImage1Delete'])->name('slider-introimage1.delete');

Route::get('/inactive/{id}', [SliderIntroImage1Controller::class, 'SliderIntroImage1Inactive'])->name('slider-introimage1.inactive');

Route::get('/active/{id}', [SliderIntroImage1Controller::class, 'SliderIntroImage1Active'])->name('slider-introimage1.active');
            
            });

            // Admin slider-introimage1dot All Routes 

Route::prefix('slider-introimage1dot')->group(function(){

Route::get('/view', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotView'])->name('manage-slider-introimage1dot');

Route::post('/store', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotStore'])->name('slider-introimage1dot.store');

Route::get('/edit/{id}', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotEdit'])->name('slider-introimage1dot.edit');

Route::post('/update', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotUpdate'])->name('slider-introimage1dot.update');

Route::get('/delete/{id}', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotDelete'])->name('slider-introimage1dot.delete');

Route::get('/inactive/{id}', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotInactive'])->name('slider-introimage1dot.inactive');

Route::get('/active/{id}', [SliderIntroImage1DotController::class, 'SliderIntroImage1DotActive'])->name('slider-introimage1dot.active');
                
               });

                // Admin Slider Intro 2 All Routes 

Route::prefix('slider-intro2')->group(function(){

Route::get('/view', [SliderIntro2Controller::class, 'SliderIntro2View'])->name('manage-slider-intro2');

Route::post('/store', [SliderIntro2Controller::class, 'SliderIntro2Store'])->name('slider-intro2.store');

Route::get('/edit/{id}', [SliderIntro2Controller::class, 'SliderIntro2Edit'])->name('slider-intro2.edit');

Route::post('/update', [SliderIntro2Controller::class, 'SliderIntro2Update'])->name('slider-intro2.update');

Route::get('/delete/{id}', [SliderIntro2Controller::class, 'SliderIntro2Delete'])->name('slider-intro2.delete');

Route::get('/inactive/{id}', [SliderIntro2Controller::class, 'SliderIntro2Inactive'])->name('slider-intro2.inactive');

Route::get('/active/{id}', [SliderIntro2Controller::class, 'SliderIntro2Active'])->name('slider-intro2.active');

});

// Admin slider-introimage2 All Routes 

Route::prefix('slider-introimage2')->group(function(){

Route::get('/view', [SliderIntroImage2Controller::class, 'SliderIntroImage2View'])->name('manage-slider-introimage2');

Route::post('/store', [SliderIntroImage2Controller::class, 'SliderIntroImage2Store'])->name('slider-introimage2.store');

Route::get('/edit/{id}', [SliderIntroImage2Controller::class, 'SliderIntroImage2Edit'])->name('slider-introimage2.edit');

Route::post('/update', [SliderIntroImage2Controller::class, 'SliderIntroImage2Update'])->name('slider-introimage2.update');

Route::get('/delete/{id}', [SliderIntroImage2Controller::class, 'SliderIntroImage2Delete'])->name('slider-introimage2.delete');

Route::get('/inactive/{id}', [SliderIntroImage2Controller::class, 'SliderIntroImage2Inactive'])->name('slider-introimage2.inactive');

Route::get('/active/{id}', [SliderIntroImage2Controller::class, 'SliderIntroImage2Active'])->name('slider-introimage2.active');

});

// Admin slider-introimage1dot All Routes 

Route::prefix('slider-introimage2dot')->group(function(){

Route::get('/view', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotView'])->name('manage-slider-introimage2dot');

Route::post('/store', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotStore'])->name('slider-introimage2dot.store');

Route::get('/edit/{id}', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotEdit'])->name('slider-introimage2dot.edit');

Route::post('/update', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotUpdate'])->name('slider-introimage2dot.update');

Route::get('/delete/{id}', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotDelete'])->name('slider-introimage2dot.delete');

Route::get('/inactive/{id}', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotInactive'])->name('slider-introimage2dot.inactive');

Route::get('/active/{id}', [SliderIntroImage2DotController::class, 'SliderIntroImage2DotActive'])->name('slider-introimage2dot.active');

});

  
    

    

    
