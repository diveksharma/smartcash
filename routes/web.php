<?php

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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return Inertia::render('Welcome', [
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



/* Route::get('/refrences', function () {
    return Inertia::render ('Refrences');
})->name('refrences'); */

Route::group(['prefix' => 'produkter', 'as' => 'products.'], function () {
    
    Route::get('/pc-kassa', function () {
        return Inertia::render ('Produkter/PC-Kassa');
    }) ->name('pc-kassa');

    Route::get('/kortterminal', function () {
        return Inertia::render ('Produkter/Kortterminal');
    })  ->name('card-terminal');

    Route::get('/kassaregister', function () {
        return Inertia::render ('Produkter/Kassaregister');
    })  ->name('kassaregister');

    Route::get('/enox-kassa', function () {
        return Inertia::render ('Produkter/Enox-kassa');
    })  ->name('enox-kassa');

    Route::get('/orderplatta', function () {
        return Inertia::render ('Produkter/Orderplatta');
    })  ->name('orderplatta');
    
    Route::get('/skanner', function () {
        return Inertia::render ('Produkter/Skanner');
    })  ->name('skanner');

    Route::get('/vågar', function () {
        return Inertia::render ('Produkter/Vågar');
    })  ->name('vågar');

    Route::get('/skrivare', function () {
        return Inertia::render ('Produkter/Skrivare');
    })  ->name('skrivare');

    Route::get('/kontrollenheter', function () {
        return Inertia::render ('Produkter/Kontrollenheter');
    })  ->name('kontrollenheter');

    Route::get('/kvittorullar', function () {
        return Inertia::render ('Produkter/Kvittorullar');
    })  ->name('kvittorullar');

    Route::get('/tillbehör', function () {
        return Inertia::render ('Produkter/Tillbehör');
    })  ->name('tillbehör');

});



require __DIR__.'/auth.php';
