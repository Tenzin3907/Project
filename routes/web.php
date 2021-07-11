<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\CartController;
use App\Models\adminregister;
use App\Models\Product;
use App\Models\Computer;
use App\Models\camera;
use App\Models\television;
use App\Models\harddisk;
use App\Models\sofa;
use App\Models\household;
use App\Models\homeappliance;
use App\Models\accessories;
use App\Models\mobile;
use App\Models\tablet;
use App\Models\book;
use App\Models\buyer;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/layout', function () {
    return view('layout.layouts');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/product', function () {
//     return view('product-details');
// });
//Gmail route
Auth::routes(['verify' => true]);
//end of Gmail route

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
    Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');
    Route::get('save',[DashboardController::class,'store']);
});

//admin register
Route::get('/admin','App\Http\Controllers\Auth\adminregisterController@create');
Route::post('/user-create','App\Http\Controllers\Auth\adminregisterController@store');


//product routes

Route::get('/Product', 'App\Http\Controllers\ProductController@indexx');
Route::post('/save-Product','App\Http\Controllers\ProductController@store');
Route::get('/Proudct-us/{id}','App\Http\Controllers\ProductController@edit');
Route::put('/Product-update/{id}','App\Http\Controllers\ProductController@update');
Route::get('delete-product/{id}','App\Http\Controllers\ProductController@delete');

Route::get('/','App\Http\Controllers\ProductController@userindex');

Route::get('/FormAdd', function () {
    return view('FormAdd');
//fetching data
});

Route::get('/details/{id}', function ($id) {
    $data = Product::findOrFail($id);
    
    return view('admin.item')->with('data',$data);
})->name('details');

 //FEEDBACK

 Route::post('/feedback-user',[feedbackController::class,'store']);
 Route::get('/feedback-user',[feedbackController::class,'feedbackadmin']);
 Route::get('delete-feedback/{id}',[feedbackController::class,'delete']);
 
//seller view route
Route::get('/books', function () {
    return view('seller.Books.book');
});
Route::get('/camera', function () {
    return view('seller.electronic.camera');
});
Route::get('/computer', function () {
    return view('seller.electronic.computer');
});
Route::get('/harddisk', function () {
    return view('seller.electronic.harddisk');
});
Route::get('/television', function () {
    return view('seller.electronic.television');
});
Route::get('/bed', function () {
    return view('seller.furniture.bed');
});
Route::get('/household', function () {
    return view('seller.furniture.household');
});
Route::get('/sofa', function () {
    return view('seller.furniture.sofa');
});
Route::get('/homeappliance', function () {
    return view('seller.homeappliance.homeappliance');
});
Route::get('/accessories', function () {
    return view('seller.mobilephone.accessories');
});
Route::get('/mobile', function () {
    return view('seller.mobilephone.mobile');
});
Route::get('/tablet', function () {
    return view('seller.mobilephone.tablet');
});
Route::get('/sells', function () {
    return view('seller.sells');
});
Route::get('/buy',function(){
    return view('admin.buyform');
}); 



//computer controller
Route::get('/computer','App\Http\Controllers\ComputerController@index');
Route::post('/save-computer','App\Http\Controllers\ComputerController@store');
Route::get('/user-computer','App\Http\Controllers\ComputerController@getuseruploads');
Route::get('delete-computer/{id}','App\Http\Controllers\ComputerController@delete');

Route::get('/','App\Http\Controllers\ComputerController@userindex');

Route::get('/computerdetails/{id}', function ($id) {
    $computer = Computer::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.computerdetails')->with('computer',$computer)
                                                        ->with('buyer',$buyer);
})->name('computerdetails');

 //camera
 Route::get('/camera','App\Http\Controllers\cameraController@index');
 Route::post('/save-camera','App\Http\Controllers\cameraController@store');
 Route::get('/user-camera','App\Http\Controllers\cameraController@getuseruploads');
 Route::get('delete-camera/{id}','App\Http\Controllers\cameraController@delete');

 Route::get('/cameradetails/{id}', function ($id) {
    $camera = camera::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.cameradetails')->with('camera',$camera)
                                                        ->with('buyer',$buyer);
})->name('cameradetails');
 
//TV
Route::get('/television','App\Http\Controllers\televisionController@index');
Route::post('/save-television-data','App\Http\Controllers\televisionController@storetelevisiondata');
Route::get('/user-television','App\Http\Controllers\televisionController@getuseruploads');
Route::get('delete-television/{id}','App\Http\Controllers\televisionController@delete');

Route::get('/televisiondetails/{id}', function ($id) {
    $data = television::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.televisiondetails')->with('data',$data)
                                                            ->with('buyer',$buyer);
})->name('televisiondetails');

//harddisk
Route::get('/harddisk','App\Http\Controllers\harddiskController@index');
Route::post('/save-harddisk-data','App\Http\Controllers\harddiskController@storeharddiskdata');
Route::get('/user-harddisk','App\Http\Controllers\harddiskController@getuseruploads');
Route::get('delete-harddisk/{id}','App\Http\Controllers\harddiskController@delete');

Route::get('/harddiskdetails/{id}', function ($id) {
    $data = harddisk::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.harddiskdetails')->with('data',$data)
                                                        ->with('buyer',$buyer);
})->name('harddiskdetails');

//sofa
Route::get('/sofa','App\Http\Controllers\sofaController@index');
Route::post('/save-sofa','App\Http\Controllers\sofaController@store');
Route::get('/user-sofa','App\Http\Controllers\sofaController@getuseruploads');
Route::get('delete-sofa/{id}','App\Http\Controllers\sofaController@delete');

Route::get('/sofadetails/{id}', function ($id) {
    $sofas = sofa::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.sofadetails')->with('sofas',$sofas)
                                                    ->with('buyer',$buyer);
})->name('sofadetails');

//household
Route::get('/household','App\Http\Controllers\householdController@index');
Route::post('/save-household-data','App\Http\Controllers\householdController@storehousehold');
Route::get('/user-household','App\Http\Controllers\householdController@getuseruploads');
Route::get('delete-household/{id}','App\Http\Controllers\householdController@delete');

Route::get('/householddetails/{id}', function ($id) {
    $households = household::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.householddetails')->with('households',$households)
                                                            ->with('buyer',$buyer);
})->name('householddetails');

//homeappliance
Route::get('/homeappliance','App\Http\Controllers\homeapplianceController@index');
Route::post('/save-homeappliance-datas','App\Http\Controllers\homeapplianceController@store');
Route::get('/user-homeappliance','App\Http\Controllers\homeapplianceController@getuseruploads');
Route::get('delete-homeappliance/{id}','App\Http\Controllers\homeapplianceController@delete');

Route::get('/homeappliancedetails/{id}', function ($id) {
    $homeappliances = homeappliance::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.homeappliancedetails')->with('homeappliances',$homeappliances)
                                                                ->with('buyer',$buyer);
})->name('homeappliancedetails');

//accessories
Route::get('/accessories','App\Http\Controllers\accessoriesController@index');
Route::post('/save-accessories','App\Http\Controllers\accessoriesController@store');
Route::get('/user-accessories','App\Http\Controllers\accessoriesController@getuseruploads');
Route::get('delete-accessories/{id}','App\Http\Controllers\accessoriesController@delete');

Route::get('/accessoriesdetails/{id}', function ($id) {
    $data = accessories::findOrFail($id);
    $buyer = buyer::all();
     
    return view('admin.useruploaddetails.accessoriesdetails')->with('data',$data)
                                                            ->with('buyer',$buyer);
})->name('accessoriesdetails');


//mobile
Route::get('/mobile','App\Http\Controllers\mobileController@index');
Route::post('/save-mobile','App\Http\Controllers\mobileController@store');
Route::get('/user-mobile','App\Http\Controllers\mobileController@getuseruploads');
Route::get('delete-mobile/{id}','App\Http\Controllers\mobileController@delete');

Route::get('/mobiledetails/{id}', function ($id) {
    $data = mobile::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.mobiledetails')->with('data',$data)
                                                        ->with('buyer',$buyer);
})->name('mobiledetails');

//tablet
Route::get('/tablet','App\Http\Controllers\tabletController@index');
Route::post('/save-tablet','App\Http\Controllers\tabletController@store');
Route::get('/user-tablet','App\Http\Controllers\tabletController@getuseruploads');
Route::get('delete-tablet/{id}','App\Http\Controllers\tabletController@delete');

Route::get('/tabletdetails/{id}', function ($id) {
    $data = tablet::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.tabletdetails')->with('data',$data)
                                                        ->with('buyer',$buyer);
})->name('tabletdetails');

//books
Route::get('/book','App\Http\Controllers\bookController@index');
Route::post('/save-book-data','App\Http\Controllers\bookController@storebookdata');
Route::get('/user-book','App\Http\Controllers\bookController@getuseruploads');
Route::get('delete-book/{id}','App\Http\Controllers\bookController@delete');

Route::get('/bookdetails/{id}', function ($id) {
    $data = book::findOrFail($id);
    $buyer = buyer::all();
    
    return view('admin.useruploaddetails.bookdetails')->with('data',$data)
                                                        ->with('buyer',$buyer);
})->name('bookdetails');

//buyer controller
Route::get('/buy','App\Http\Controllers\buyerController@index');
Route::post('/save-buy','App\Http\Controllers\buyerController@store');
Route::get('/user-buy','App\Http\Controllers\buyerController@getuseruploads');
Route::get('delete-buy/{id}','App\Http\Controllers\buyerController@delete');

//for buyer entering their form details using id
Route::get('/buycamera/{id}','App\Http\Controllers\buyerController@camerabuying');
Route::get('/buy/{id}','App\Http\Controllers\buyerController@buying'); 
Route::get('/buybook/{id}','App\Http\Controllers\buyerController@bookbuying');
Route::get('/harddiskbuy/{id}','App\Http\Controllers\buyerController@harddiskbuying'); 
Route::get('/televisionbuy/{id}','App\Http\Controllers\buyerController@televisionbuying'); 
Route::get('/householdbuy/{id}','App\Http\Controllers\buyerController@householdbuying'); 
Route::get('/sofabuy/{id}','App\Http\Controllers\buyerController@sofabuying'); 
Route::get('/mobilebuy/{id}','App\Http\Controllers\buyerController@mobilebuying'); 
Route::get('/accessoriesbuy/{id}','App\Http\Controllers\buyerController@accessoriesbuying'); 
Route::get('/tabletbuy/{id}','App\Http\Controllers\buyerController@tabletbuying'); 
Route::get('/homeappliancebuy/{id}','App\Http\Controllers\buyerController@homeappliancebuying');


// sellersuploads
Route::get('/uploadcom','App\Http\Controllers\ComputerController@uploadcomputers');
Route::get('/uploadcam','App\Http\Controllers\cameraController@uploadcameras');
Route::get('/uploadtv','App\Http\Controllers\televisionController@uploadtelevisions');
Route::get('/uploadhard','App\Http\Controllers\harddiskController@uploadharddsiks');
Route::get('/uploadsbook','App\Http\Controllers\bookController@uploadbook');
Route::get('/uploadhouses','App\Http\Controllers\householdController@uploadhouseholds');
Route::get('/uploadssofa','App\Http\Controllers\sofaController@uploadsofas');
Route::get('/uploadappliances','App\Http\Controllers\homeapplianceController@uploadhomeappliances');
Route::get('/uploadaccess','App\Http\Controllers\accessoriesController@uploadaccessories');
Route::get('/uploadphone','App\Http\Controllers\mobileController@uploadmobiles');
Route::get('/uploadtab','App\Http\Controllers\tabletController@uploadtablets');
Route::get('/uploadproduct','App\Http\Controllers\ProductController@uploadproducts');

//add to card
Route::get('/viewproduct','App\Http\Controllers\CartController@index');
Route::get('cart', 'App\Http\Controllers\CartController@cart');
Route::get('add-to-cart/{id}','App\Http\Controllers\CartController@addToCart');

Route::patch('update-cart', 'App\Http\Controllers\CartController@update');
Route::delete('remove-from-cart', 'App\Http\Controllers\CartController@remove');


// camera approve
Route::get('approve', 'App\Http\Controllers\ControllerApprove@approve')->name('approve');
Route::get('camera_approve', 'App\Http\Controllers\ControllerApprove@camera_approve')->name('camera_approve');
Route::post('/camera_approval', 'App\Http\Controllers\ControllerApprove@camera_approval')->name('camera_approval');

// computer approve
Route::get('computer_approve', 'App\Http\Controllers\ControllerApprove@computer_approve')->name('computer_approve');
Route::post('/computer_approval', 'App\Http\Controllers\ControllerApprove@computer_approval')->name('computer_approval');

// television approve
Route::get('television_approve', 'App\Http\Controllers\ControllerApprove@television_approve')->name('television_approve');
Route::post('/television_approval', 'App\Http\Controllers\ControllerApprove@television_approval')->name('television_approval');

// sofa approve
Route::get('sofa_approve', 'App\Http\Controllers\ControllerApprove@sofa_approve')->name('sofa_approve');
Route::post('/sofa_approval', 'App\Http\Controllers\ControllerApprove@sofa_approval')->name('sofa_approval');

// harddisk approve
Route::get('harddisk_approve', 'App\Http\Controllers\ControllerApprove@harddisk_approve')->name('harddisk_approve');
Route::post('/harddisk_approval', 'App\Http\Controllers\ControllerApprove@harddisk_approval')->name('harddisk_approval');

// book approve
Route::get('book_approve', 'App\Http\Controllers\ControllerApprove@book_approve')->name('book_approve');
Route::post('/book_approval', 'App\Http\Controllers\ControllerApprove@book_approval')->name('book_approval');

// household approve
Route::get('household_approve', 'App\Http\Controllers\ControllerApprove@household_approve')->name('household_approve');
Route::post('/household_approval', 'App\Http\Controllers\ControllerApprove@household_approval')->name('household_approval');

// homeappliance approve
Route::get('homeappliance_approve', 'App\Http\Controllers\ControllerApprove@homeappliance_approve')->name('homeappliance_approve');
Route::post('/homeappliance_approval', 'App\Http\Controllers\ControllerApprove@homeappliance_approval')->name('homeappliance_approval');

// tablet approve
Route::get('tablet_approve', 'App\Http\Controllers\ControllerApprove@tablet_approve')->name('tablet_approve');
Route::post('/tablet_approval', 'App\Http\Controllers\ControllerApprove@tablet_approval')->name('tablet_approval');

// accessories approve
Route::get('accessories_approve', 'App\Http\Controllers\ControllerApprove@accessories_approve')->name('accessories_approve');
Route::post('/accessories_approval', 'App\Http\Controllers\ControllerApprove@accessories_approval')->name('accessories_approval');

// mobile approve
Route::get('mobile_approve', 'App\Http\Controllers\ControllerApprove@mobile_approve')->name('mobile_approve');
Route::post('/mobile_approval', 'App\Http\Controllers\ControllerApprove@mobile_approval')->name('mobile_approval');

// Product approve
Route::get('product_approve', 'App\Http\Controllers\ControllerApprove@product_approve')->name('product_approve');
Route::post('/product_approval', 'App\Http\Controllers\ControllerApprove@product_approval')->name('product_approval');