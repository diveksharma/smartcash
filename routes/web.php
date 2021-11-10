<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* Models */
use App\Models\Product;
/* Controllers */
use App\Http\Controllers\CartController;


if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return Inertia::render('WelcomeNew', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('Test');
})->name('test');

Route::get('/omoss', function () {
    return Inertia::render('Aboutus');
})->name('aboutus');

Route::get('/inlosenavtal', function () {
    return Inertia::render ('Agreement');
})->name('agreement');

Route::get('/refrences', function () {
    return Inertia::render ('Refrences');
})->name('refrences');

Route::get('/kontakt', function () {
    return Inertia::render ('Contact');
})->name('contact');

Route::get('/erbjudande', function () {
    return Inertia::render ('Erbjudande');
})->name('erbjudande');

Route::get('/checkout', function () {
    return Inertia::render ('Checkout');
})->name('checkout');

Route::get('/productinfo', function () {
    return Inertia::render ('ProductInfo');
})->name('productinfo');

/* Route::get('/refrences', function () {
    return Inertia::render ('Refrences');
})->name('refrences'); */

Route::group(['prefix' => 'produkter', 'as' => 'products.'], function () {
    
    Route::get('/pc-kassa', function () {
        return Inertia::render('Produkter/PC-Kassa', [
            'products-pc-kassa' => Product::where('category', 'PC-kassa')->get(),
        ]);
    }) ->name('pc-kassa');

    Route::get('/kortterminal', function () {
        return Inertia::render('Produkter/Kortterminal', [
            'products-kortterminal' => Product::where('category', 'Kortterminal')->get(),
        ]);
    })  ->name('card-terminal');

    Route::get('/kassaregister', function () {
        return Inertia::render('Produkter/Kassaregister', [
            'products-kassaregister' => Product::where('category', 'Kassaregister')->get(),
        ]);
    })  ->name('kassaregister');

    Route::get('/enox-kassa', function () {
        return Inertia::render('Produkter/Enox-kassa', [
            'products-enox-kassa' => Product::where('category', 'EnoxKassa')->get(),
        ]);
    })  ->name('enox-kassa');

    Route::get('/orderplatta', function () {
        return Inertia::render('Produkter/Orderplatta',[
            'products-orderplatta' => Product::where('category', 'Orderplatta')->get(),
        ]);
    })  ->name('orderplatta');
    
    Route::get('/skanner', function () {
        return Inertia::render('Produkter/Skanner',[
            'products-skanner' => Product::where('category', 'Skanner')->get(),
        ]);
    })  ->name('skanner');

    Route::get('/vagar', function () {
        return Inertia::render('Produkter/Vågar',[
            'products-vagar' => Product::where('category', 'våg')->get(),
        ]);
    })  ->name('vagar');

    Route::get('/skrivare', function () {
        return Inertia::render('Produkter/Skrivare',[
            'products-skrivare' => Product::where('category', 'Skrivare')->get(),
        ]);
    })  ->name('skrivare');

    Route::get('/kontrollenheter', function () {
        return Inertia::render('Produkter/Kontrollenheter',[
            'products-kontrollenheter' => Product::where('category', 'Kontrollenheter')->get(),
        ]);
    })  ->name('kontrollenheter');

    Route::get('/kvittorullar', function () {
        return Inertia::render('Produkter/Kvittorullar',[
            'products-kvittorullar' => Product::where('category', 'Kvittorullar')->get(),
        ]);
    })  ->name('kvittorullar');

    Route::get('/tillbehor', function () {
        return Inertia::render('Produkter/Tillbehör',[
            'products-tillbehor' => Product::where('category', 'Tillbehör')->get(),
        ]);
    })  ->name('tillbehor');

});

Route::post('/add-to-shopping-cart', [CartController::class, 'addToShoppingCart']);
Route::get('/get-cart', [CartController::class, 'showCart']);
Route::get('/clear-cart', [CartController::class, 'clearShoppingCart']);



require __DIR__.'/auth.php';
