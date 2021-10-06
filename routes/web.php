<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('user_profile', ['username' => auth()->user()->username]);
})->name('dashboard');

Route::get('{username}', function($username) {
    $user = User::where('username', $username)->first();
    if ($user == null ) {
        abort(404);
    }
    return view('profile', ['profile' => $user]);
})->name('user_profile');

Route::resource('/posts', [PostController::class]);
