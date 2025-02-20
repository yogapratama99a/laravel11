<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use app\Http\Controllers\UserController;
//Acara 3
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index']);

Route::match(['get', 'post'], '/', function () {
    return 'ini match';
});
Route::any('/', function () {
    return 'ini any';
});
Route::redirect('/here', 'there', 301);
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome')->name('Taylor');
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
Route::get('user/{name?}', function ($name = "John") {
    return $name;
});
Route::get('user/{name}', function ($name) {

})->where('name', '[A-Za-z]+');
Route::get('user/{id}', function ($id) { })->where('id', '[0-9]+');
Route::get('user/{id}{name}', function ($id, $name) { })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Route::get('user/{id}', function ($id) {

});
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


//Acara 4
$url = route('profile');
return redirect()->route('profile');

Route::get('/user/{id}/profile', function ($id) {
})->name('profile');

$url = route('profile', ['id' => 1]);

Route::get('/user/{id}/profile', function ($id) {
})->name('profile');

$url = route('profile', ['id' => 1, 'photos' => 'yes']);

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    });
    Route::get('/user/profile', function () {
    });
});
Route::namespace('Admin')->group(function () { });

Route::domain('{account).myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    });
});
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
    });
});
Route::name('admin')->group(function () {
    Route::get('users', function () {
    })->name('users');
});
=======
use App\Http\Controllers\UserController; // Perbaikan namespace

// Acara 3
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::match(['get', 'post'], '/match', function () {
    return 'ini match';
});

Route::any('/any', function () {
    return 'ini any';
});

Route::redirect('/here', '/there', 301);
Route::view('/welcome', 'welcome')->name('welcome');
Route::get('user/{name?}', function ($name = "John") {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    return "User ID: " . $id;
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    return "User ID: $id, Name: $name";
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

Route::get('search/{search}', function ($search) {
    return "Hasil pencarian: " . $search;
})->where('search', '.*');

// Acara 4 - Perbaikan route profile
Route::get('/user/{id}/profile', function ($id) {
    return "Profile user dengan ID: " . $id;
})->name('profile');

// Pastikan pemanggilan route profile dilakukan dengan parameter ID
Route::get('/redirect-to-profile', function () {
    return redirect()->route('profile', ['id' => 1]);
});

// Middleware
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/middleware-test', function () {
        return "Middleware test route";
    });
});

// Namespace Group (Kosong, hanya sebagai contoh)
Route::namespace('Admin')->group(function () {});

// Domain Group - Perbaikan sintaks (Kurung kurawal yang salah)
Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        return "User ID: $id di akun: $account";
    });
});

// Prefix Group
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return "Admin Users Page";
    });
});

// Route Name Group
Route::name('admin.')->group(function () {
    Route::get('users', function () {
        return "Admin User List";
    })->name('users');
});
>>>>>>> 3fed889 (latihan acara 3 dan 4)
