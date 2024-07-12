<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    HomeController,
    IvaoController,
};
use App\Http\Livewire\Website\AtcBooking;
use App\Http\Livewire\Website\Flight;
use App\Http\Livewire\Website\Home;
use App\Http\Livewire\Website\Profile;
use App\Http\Livewire\Website\Stats;
// use App\Http\Livewire\Website\{
//     Flight,
//     Profile,
//     AtcBooking,
//     Home,
// };

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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

Route::get('/', Home::class)->name("home");

Route::get("locale/{locale}", function ($locale) {
    Session::put("locale", $locale);
    return redirect()->back();
})->name('locale');


Route::prefix('booking')->group(function () {
    Route::get('pilot', Flight::class)
        ->name('booking.pilot');
    Route::get('atc', AtcBooking::class)
        ->name('booking.atc')
        ->middleware(['auth']);
    Route::get('stats', Stats::class)->name('booking.stats');
});


Route::get("login", [IvaoController::class, "sso"])->name("ivao.login-sso");

Route::get("auth/callback", [IvaoController::class, "sso"])->name(
    "ivao.login-sso-callback"
);

Route::get("/logout", function () {
    Auth::logout();
    return redirect('/');
})->name("ivao.logout");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Profile::class)->name('dashboard');
});
