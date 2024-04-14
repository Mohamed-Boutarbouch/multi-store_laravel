<?php

use App\Http\Controllers\ProfileController;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Foundation\Application;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('{store:slug}', function (Store $store) {
//     return Inertia::render('Products', [
//         'products' => Product::where('store_id', $store->id)->get()
//     ]);
// });

Route::get('/{user:username}/{store:slug}', function (User $user, Store $store) {
    $store = $user->stores()
        ->where('slug', $store->slug)
        ->firstOrFail();

    return Inertia::render('Products', [
        'products' => $store->products()->get()
    ]);
});

Route::get('/gg', function () {
    $store = 'gg';
    dd($store);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
