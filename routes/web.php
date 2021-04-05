<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\isEmpty;
use App\Http\Controllers\PackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaidPackController;

use App\Http\Controllers\PerfectMoneyController;
use App\Http\Controllers\WithdrawalRequestController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UnderstandingRequestController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('welcome');
})->name('welcome');

Route::get('/paid/{pack}', [PaidPackController::class, 'create'])->middleware(['auth'])->name('paid.create');

Route::resource('paid', PaidPackController::class)->except(['create'])->middleware(['auth']);

Route::resource("contact", ContactController::class);

Route::resource("understanding_request", UnderstandingRequestController::class);

Route::resource('withdrawal', WithdrawalRequestController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();
    $paid_pack = User::find(Auth::user()->id)->paid_pack;

    $carbon = new Carbon();
    if (!is_null($paid_pack)) {
        $carbon = Carbon::createFromTimestamp($paid_pack->duration);
    }

    $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
    $withdrawn_amount = 0;
    if (count($withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $withdrawn_amount += $withdrawn->amount;
        }
    }
    $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
    $not_withdrawn_amount = 0;
    if (count($not_withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $not_withdrawn_amount += $withdrawn->amount;
        }
    }

    return view('dashboard', compact('carbon', 'paid_pack', 'sponsored_users_count', 'withdrawn_amount', 'not_withdrawn_amount'));
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();
    $paid_pack = User::find(Auth::user()->id)->paid_pack;

    $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
    $withdrawn_amount = 0;
    if (count($withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $withdrawn_amount += $withdrawn->amount;
        }
    }
    $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
    $not_withdrawn_amount = 0;
    if (count($not_withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $not_withdrawn_amount += $withdrawn->amount;
        }
    }

    return view('admin.profile', compact('paid_pack', 'sponsored_users_count', 'withdrawn_amount', 'not_withdrawn_amount'));
})->middleware(['auth'])->name('profile');

Route::get('/sponsorship', function () {
    $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();
    $sponsored_users = User::where('sponsor', '=', Auth::user()->name)->get();
    $paid_pack = User::find(Auth::user()->id)->paid_pack;
    $sponsored_users_paid_packs = [];

    foreach($sponsored_users as $user) {
        $paid_pack = User::find($user->id)->paid_pack;
        $sponsored_users_paid_packs[] = $paid_pack;
    }

    $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
    $withdrawn_amount = 0;
    if (count($withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $withdrawn_amount += $withdrawn->amount;
        }
    }
    $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
    $not_withdrawn_amount = 0;
    if (count($not_withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $not_withdrawn_amount += $withdrawn->amount;
        }
    }

    return view('admin.sponsorship', compact('paid_pack', 'sponsored_users_count', 'sponsored_users', 'sponsored_users_paid_packs', 'withdrawn_amount', 'not_withdrawn_amount'));
})->middleware(['auth'])->name('sponsorship');

Route::get('/investment_report', function () {
    $sponsored_users_count = User::where('sponsor', '=', Auth::user()->name)->count();
    $paid_pack = User::find(Auth::user()->id)->paid_pack;

    $withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', true)->get();
    $withdrawn_amount = 0;
    if (count($withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $withdrawn_amount += $withdrawn->amount;
        }
    }
    $not_withdrawns = User::find(Auth::user()->id)->payoffs()->where('withdrawn', false)->get();
    $not_withdrawn_amount = 0;
    if (count($not_withdrawns) > 0) {
        foreach($withdrawns as $withdrawn) {
            $not_withdrawn_amount += $withdrawn->amount;
        }
    }

    $payoffs = User::find(Auth::user()->id)->payoffs;

    return view('admin.investment_report', compact('paid_pack', 'payoffs', 'sponsored_users_count', 'withdrawn_amount', 'not_withdrawn_amount'));
})->middleware(['auth'])->name('investment_report');

Route::get('/perfect_money_payment/success/{pack}', [PerfectMoneyController::class, 'success'])->name('perfect_success');

Route::get('/perfect_money_payment/fail/{pack}', [PerfectMoneyController::class, 'fail'])->name('perfect_fail');

Route::resource('packs', PackController::class);

// Route::get('/confirm/{id}/{token}', [RegisteredUserController::class, 'confirm']);

require __DIR__.'/auth.php';
