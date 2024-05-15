<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('quizzes', QuizController::class);
    Route::get('quizzes/{quiz}/attempt', [QuizController::class, 'attempt'])->name('quizzes.attempt');
    Route::post('quizzes/{quiz}/submit', [QuizController::class, 'submit'])->name('quizzes.submit');

    Route::resource('questions', QuestionController::class)->except(['index', 'show']);
    Route::resource('answers', AnswerController::class)->except(['index', 'show']);

    Route::resource('tags', TagController::class);

    Route::get('search', [SearchController::class, 'index'])->name('search');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');

    Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::get('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
    Route::post('subscriptions', [SubscriptionController::class, 'store'])->name('subscriptions.store');

    Route::get('payments/create', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('payments', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('payments/success', [PaymentController::class, 'success'])->name('payments.success');
    Route::get('payments/cancel', [PaymentController::class, 'cancel'])->name('payments.cancel');

    Route::get('leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard');

    Route::get('achievements', [AchievementController::class, 'index'])->name('achievements.index');
    Route::get('achievements/{achievement}', [AchievementController::class, 'show'])->name('achievements.show');
});

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('about', function () {
    return view('about.index');
})->name('about');

Route::get('privacy', function () {
    return view('privacy.index');
})->name('privacy');

Route::get('terms', function () {
    return view('terms.index');
})->name('terms');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');