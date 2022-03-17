<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {


    Route::get('/', function () {
        //return view('welcome');
        return \Inertia\Inertia::render("Home");
    });

    Route::get('/users/index', function () {
        //return view('welcome');
        $thereIsSearchKeyword = \Illuminate\Support\Facades\Request::input('search');
        $users = \App\Models\User::query()
            ->when($thereIsSearchKeyword, function ($query, $search){
                $finaLSearch = "%{$search}%";
                $query->where("name", "like", $finaLSearch);
            })
            ->paginate(20)
            ->withQueryString()
            ->through(fn($user) => [
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
            ]);

        return \Inertia\Inertia::render("Users/Index",[
            "time" => now()->format("Y - m - d h:m:s"),
            "users" => $users,
            "filters" => $thereIsSearchKeyword,
        ]);
    })->name("user_index");

    Route::get('/settings', function () {
        //return view('welcome');
        return \Inertia\Inertia::render("Settings");
    });

    Route::post('/users', function () {
        $allData = \Illuminate\Support\Facades\Request::validate([
            "name" => "required|string",
            "email" => "required|string",
            "password" => "required|string|max:25"
        ]);

        // create the user
        \App\Models\User::create($allData);

        //redirect
        return redirect("/users/index");
    });


    Route::get('/users/create', function () {
        //sleep(3);
        //return view('welcome');
        return \Inertia\Inertia::render("Users/Create");
    });

    Route::post('/logout', function () {
        dd("logout users");
    });


});
