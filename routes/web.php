<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'showAuth'])->name('showAuth');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signOut', [AuthController::class, 'signOut'])->name('signOut');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// Create new user
Route::get('/create', [AdminController::class, 'showCreateUser'])->name('showCreateUser');
Route::post('/store', [AdminController::class, 'store'])->name('store');

// Edit user
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [AdminController::class, 'update'])->name('update');

// Delete user
Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

// Detail user
Route::get('/detail/{id}', [AdminController::class, 'detail'])->name('detail');

