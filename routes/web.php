<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/', function () {
        return redirect()->route('user_profile', ['username' => auth()->user()->username]);
    });

    Route::get('/home', function() {
        $profile = auth()->user();
        $iFollow = $profile->iFollow()->take(3);
        $toFollow = $profile->otherUsers()->take(3);
        // return view('home', ['posts' => auth()->user()->home()]);
        // return view('home', compact('posts', auth()->user()->home(), 'profile', $profile, 'iFollow', $iFollow, 'toFollow', $toFollow));
        return view('home', ['posts' => auth()->user()->home(), 'profile' => $profile, 'iFollow' => $iFollow, 'toFollow' => $toFollow]);
    })->name('home');

    Route::get('/followers', function() {
        return view('followers', ['profile' => auth()->user(), 'followers'=>auth()->user()->followers()->get()]);
    })->name('followers');

    Route::get('/following', function() {
        return view('following', ['profile' => auth()->user(), 'following'=>auth()->user()->follows()->get()]);
    })->name('following');

    Route::get('/inbox', function(){
        $user = auth()->user();
        $requests = $user->FollowReq();
        $pendings = $user->pendingFollowingReq();
        return view('inbox', ['profile' => $user, 'requests'=>$requests, 'pendings'=>$pendings]);
    })->name('inbox');

    Route::resource('comments', CommentController::class);

});

Route::get('{username}', function($username) {
    $user = User::where('username', $username)->first();
    if ($user == null ) {
        abort(404);
    }
    $posts = $user->posts;
    return view('profile', ['profile' => $user, 'posts' => $posts]);
})->name('user_profile');

Route::resource('posts', PostController::class);

