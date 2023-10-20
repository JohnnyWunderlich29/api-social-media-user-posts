<?php


use App\Livewire\BaseDashboard;
use App\Livewire\PostUser;
use App\Livewire\UserApi;
use App\Livewire\UserCard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->to('/dashboard');
});

Route::get('/users/api', UserApi::class)->name('users.api');

Route::get('/dashboard', BaseDashboard::class)->name('dashboard');

Route::get('/user/{id}', UserCard::class)->name('user.card');

Route::get('/user/{id}/post', PostUser::class)->name('user.post');