<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserFeedbackController;
use App\Livewire\PlanAdd;
use App\Livewire\PlanEdit;
use App\Livewire\UserPurchases;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'verifyRole:admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin-home');

    Route::get('/plans', [PlanController::class, 'index'])->name('all-plans');
    Route::get('/plan/add', PlanAdd::class)->name('add-plan');
    Route::get('/plans/{plan:slug}', PlanEdit::class)->name('edit-plan');
    Route::delete('/plans/{plan:slug}', [PlanController::class, 'destroy'])->name('delete-plan');

    Route::get('/customers', [AdminController::class, 'AllUsers'])->name('all-users');
    Route::get('/users/{userId}/manage', UserPurchases::class)->name('user-purchases');
    Route::delete('/delete-user/{user}', [AdminController::class, 'deleteUser'])->name('delete-user');

    Route::get('/options', [OptionController::class, 'Options'])->name('all-options');
    Route::post('/options/save', [OptionController::class, 'saveOptions'])->name('save-options');

    Route::get('/feedbacks', [UserFeedbackController::class, 'feedbacks'])->name('all-feedbacks');
    Route::get('/feedbacks/{feedback}', [UserFeedbackController::class, 'view'])->name('edit-feedback');
    Route::delete('/feedbacks/{feedback}', [UserFeedbackController::class, 'destroy'])->name('delete-feedback');

    Route::get('/adminUsers', [AdminController::class, 'allAdmins'])->name('all-admins');

    Route::get('/signup', [AdminController::class, 'addAdmin'])->name('add-admin');

    Route::get('/edit-admin/{user}', [AdminController::class, 'editAdmin'])->name('edit-admin');

    Route::delete('/delete-admin/{user}', [AdminController::class, 'deleteAdmin'])->name('delete-admin');
});
