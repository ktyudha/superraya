<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\Inbox\InboxController;
use App\Http\Controllers\Admin\Setting\LogoController;
use App\Http\Controllers\Admin\Setting\AboutController;
use App\Http\Controllers\Admin\Slider\SliderController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Setting\PopupsController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Service\ServiceController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Setting\BasicInfoController;
use App\Http\Controllers\Admin\Setting\BreadcrumbController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Product\ProductCategoryController;
use App\Http\Controllers\Admin\SocialMedia\SocialMediaController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

if ($this->app->environment('production')) {
    \URL::forceScheme('https');
}
// Route::middleware('guest')->group(function () {
//     Route::get('register', [RegisteredUserController::class, 'create'])
//         ->name('register');

//     Route::post('register', [RegisteredUserController::class, 'store']);

//     Route::get('login', [AuthenticatedSessionController::class, 'create'])
//         ->name('login');

//     Route::post('login', [AuthenticatedSessionController::class, 'store']);

//     Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//         ->name('password.request');

//     Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//         ->name('password.email');

//     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//         ->name('password.reset');

//     Route::post('reset-password', [NewPasswordController::class, 'store'])
//         ->name('password.store');
// });


Route::group(['prefix' => 'admin-panel', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
        Route::post('/login', [LoginController::class, 'store'])->name('auth.login.process');
        Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    });

    Route::middleware('auth:web', 'permission:admin access')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        // Slider
        Route::resource('sliders', SliderController::class);

        // Service
        Route::resource('services', ServiceController::class);

        // Product
        Route::name('product.')->group(function () {
            Route::resource('product/categories', ProductCategoryController::class);
            Route::resource('product/posts', ProductController::class);
        });

        // Social
        Route::resource('social', SocialMediaController::class);

        // Inbox
        Route::resource('inboxes', InboxController::class);

        // Settings
        Route::prefix('settings')
            ->name('settings.')
            ->middleware('permission:settings')
            ->group(function () {
                Route::get('basic-info', [BasicInfoController::class, 'edit'])->name('basic-info.edit');
                Route::put('basic-info', [BasicInfoController::class, 'update']);
                // Route::get('index', [AboutController::class, 'index'])->name('about.index');
                Route::get('about', [AboutController::class, 'edit'])->name('about.edit');
                Route::put('about', [AboutController::class, 'update'])->name('about.update');
                Route::get('logo', [LogoController::class, 'edit'])->name('logo.edit');
                Route::put('logo', [LogoController::class, 'update'])->name('logo.update');
                // Route::get('breadcrumb', [BreadcrumbController::class, 'edit'])->name('breadcrumb.edit');
                // Route::put('breadcrumb', [BreadcrumbController::class, 'update'])->name('breadcrumb.update');
                // Route::get('popup', [PopupsController::class, 'index'])->name('popup.index');
                // Route::get('popup/{popup}/edit', [PopupsController::class, 'edit'])->name('popup.edit');
                // Route::patch('popup/{popup}', [PopupsController::class, 'update'])->name('popup.update');
            });
    });

    // Route::middleware('auth')->group(function () {
    //     Route::get('/', [DashboardController::class, 'index'])->name('index');
    //     Route::get('verify-email', EmailVerificationPromptController::class)
    //         ->name('verification.notice');

    //     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //         ->middleware(['signed', 'throttle:6,1'])
    //         ->name('verification.verify');

    //     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //         ->middleware('throttle:6,1')
    //         ->name('verification.send');

    //     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //         ->name('password.confirm');

    //     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    //     Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    //     // Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    //     //     ->name('logout');

    //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // });
});
