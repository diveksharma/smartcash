<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;

/* Models */
use App\Models\Product;
/* Controllers */
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;


if (App::environment('production')) {
    URL::forceScheme('https');
}


/* Pages */
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

Route::get('/bokademo', function () {
    return Inertia::render('Bokademo');
})->name('bokademo');

Route::get('/omoss', function () {
    return Inertia::render('Aboutus');
})->name('aboutus');

Route::get('/restaurang&cafe', function () {
    return Inertia::render('Restaurang&Cafe');
})->name('restaurang&cafe');

Route::get('/skönhet&hälsa', function () {
    return Inertia::render('Skonhet&Halsa');
})->name('skönhet&hälsa');

Route::get('/livsmedel&kiosk', function () {
    return Inertia::render('Livsmedel&Kiosk');
})->name('livsmedel&kiosk');

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
    return Inertia::render('Erbjudande', [
        'products-package' => Product::where('category', 'Package')->get(),
        'cart' => session()->get('cart') ? session()->get('cart') : [],
    ]);
})->name('erbjudande');
Route::get('/erbjudande/{product:slug}', function (Product $product) {
    return Inertia::render('ProductInfo', [
        'product-info' => [
        'id' => $product->id,
        'category' => $product->category,
        'name' => $product->name,
        'slug' => $product->slug,
        'description' => $product->description,
        'price_currency' => $product->price_currency,
        'image' => $product->image,
        'tag' => $product->tag,
        'recommendation' => $product->recommendation,
        'status' => $product->status,
        'buyable' => $product->buyable,
        ],
        'cart' => session()->get('cart') ? session()->get('cart') : [],

    ]);
});
    

Route::get('/checkout', function (Request $request) {
    return Inertia::render ('Checkout', [
        'cart' => $request->session()->get('cart'),
    ]);
})->name('checkout');


Route::group(['prefix' => 'produkter', 'as' => 'products.'], function () {
    
    Route::get('/pc-kassa', function () {
        return Inertia::render('Produkter/PC-Kassa', [
            'products-pc-kassa' => Product::where('category', 'PC-kassa')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    }) ->name('pc-kassa');
    Route::get('/pc-kassa/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });

    Route::get('/kortterminal', function () {
        return Inertia::render('Produkter/Kortterminal', [
            'products-kortterminal' => Product::where('category', 'Kortterminal')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('card-terminal');
    Route::get('/kortterminal/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });

    Route::get('/kassaregister', function () {
        return Inertia::render('Produkter/Kassaregister', [
            'products-kassaregister' => Product::where('category', 'Kassaregister')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('kassaregister');
    Route::get('/kassaregister/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });

    Route::get('/enox-kassa', function () {
        return Inertia::render('Produkter/Enox-kassa', [
            'products-enox-kassa' => Product::where('category', 'EnoxKassa')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('enox-kassa');
    Route::get('/enox-kassa/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });

    Route::get('/orderplatta', function () {
        return Inertia::render('Produkter/Orderplatta',[
            'products-orderplatta' => Product::where('category', 'Orderplatta')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('orderplatta');
    Route::get('/orderplatta/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });
    
    Route::get('/skanner', function () {
        return Inertia::render('Produkter/Skanner',[
            'products-skanner' => Product::where('category', 'Skanner')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('skanner');
    Route::get('/skanner/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],
        ]);
    });

    Route::get('/vagar', function () {
        return Inertia::render('Produkter/Vågar',[
            'products-vagar' => Product::where('category', 'Våg')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('vagar');
    Route::get('/vagar/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    });

    Route::get('/skrivare', function () {
        return Inertia::render('Produkter/Skrivare',[
            'products-skrivare' => Product::where('category', 'Skrivare')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('skrivare');
    Route::get('/skrivare/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    });

    Route::get('/kontrollenheter', function () {
        return Inertia::render('Produkter/Kontrollenheter',[
            'products-kontrollenheter' => Product::where('category', 'Kontrollenheter')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('kontrollenheter');
    Route::get('/kontrollenheter/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    });

    Route::get('/kvittorullar', function () {
        return Inertia::render('Produkter/Kvittorullar',[
            'products-kvittorullar' => Product::where('category', 'Kvittorullar')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('kvittorullar');
    Route::get('/kvittorullar/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    });

    Route::get('/tillbehor', function () {
        return Inertia::render('Produkter/Tillbehör',[
            'products-tillbehor' => Product::where('category', 'Tillbehör')->get(),
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    })  ->name('tillbehor');
    Route::get('/tillbehor/{product:slug}', function (Product $product) {
        return Inertia::render('ProductInfo', [
            'product-info' => [
                'id' => $product->id,
                'category' => $product->category,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'price_currency' => $product->price_currency,
                'image' => $product->image,
                'tag' => $product->tag,
                'recommendation' => $product->recommendation,
                'status' => $product->status,
                'buyable' => $product->buyable,
            ],
            'cart' => session()->get('cart') ? session()->get('cart') : [],

        ]);
    });
});

/* Apis */
// Shopping and Cart
Route::post('/add-to-shopping-cart', [CartController::class, 'addToShoppingCart']);
Route::get('/get-cart', [CartController::class, 'showCart']);
Route::get('/clear-cart', [CartController::class, 'clearShoppingCart']);
Route::post('/remove-item-cart', [CartController::class, 'removeItemCart']);

/* Forms */
Route::post('/submit-contact-form', [PageController::class, 'submitContactForm']);
Route::post('/submit-agreement-form', [PageController::class, 'submitAgreementForm']);
Route::post('/submit-request-form', [PageController::class, 'submitRequestForm']);

require __DIR__.'/auth.php';
