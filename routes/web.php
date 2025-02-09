 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });


// // Authentication Routes
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/admindashboard', [DashboardController::class, 'index'])->middleware('admin');
// // Public Routes
// Route::get('/homee', [HomeController::class, 'homee'])->name('homee');
// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/products', [ProductController::class, 'index'])->name('products.index');








// Route::middleware(['auth'])->group(function () {

//     // Home Route
//     // Route::get('/home', [HomeController::class, 'index'])->name('home');

    
    
//   Route::middleware(['auth:sanctum', 'verified'])->get('/admindashboard', function () {
//         return view('admindashboard');
//     })->name('admindashboard');
    
    
//     Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.show'); 
//     Route::post('/cart/add/{product}', [ShoppingCartController::class, 'addProduct'])->name('cart.add');
//  Route::post('/cart/remove/{product}', [ShoppingCartController::class, 'removeProduct'])->name('cart.remove'); 
//     Route::get('/cart', [ShoppingCartController::class, 'index'])->name('cart.index');
     -->
    
//  -->

    // Department Routes
//     Route::get('/clothing-department', [PageController::class, 'clothingDepartment'])->name('clothing.department');
//     Route::get('/food-section', [PageController::class, 'foodSection'])->name('food.section');
//     Route::get('/makeup-department', [PageController::class, 'makeupDepartment'])->name('makeup.department');
//     Route::get('/mobiles-section', [PageController::class, 'mobilesSection'])->name('mobiles.section');

//     // Clothing Department Route
//     Route::get('/clothing-department', [ClothingController::class, 'index'])->name('clothing.department');

//     // Authenticated User Routes
//     Route::middleware(['role:User'])->group(function () {
//         Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//         Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
//         Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
//         Route::get('/account', [AccountController::class, 'edit'])->name('account.edit');
//         Route::post('/account', [AccountController::class, 'update'])->name('account.update');
//         Route::get('/dashboard', [UserController::class, 'index'])->middleware('auth')->name('user.dashboard');
//     });
// });

// Home Route (Moving to the end to avoid conflict)
//Route::get('/home', [HomeController::class, 'index'])->name('home');

// Additional Pages
//Route::get('/about', [PageController::class, 'about'])->name('about');
//Route::get('/contact', [PageController::class, 'contact'])->name('contact');


// Admin Routes
//Route::middleware(['auth', 'role:Admin'])->group(function () {



  
  //  Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //Route::post('/admin/user/{user}/update-role', [AdminController::class, 'updateUserRole'])->name('admin.updateUserRole');
  //  Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//});

//Auth::routes();
// 