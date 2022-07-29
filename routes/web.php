<?php

use App\Http\Controllers\DashboardReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/staff', function () {
    return view('dashboard.staff.index');
});

// Route::resource('dashboard/report', DashboardReportController::class, 'index') ;
// //->middleware('auth');
// Route::resource('dashboard/report/tambahPO', DashboardReportController::class,'show') ;
// Route::resource('dashboard/report/tambahPO', DashboardReportController::class,'validasi');

//route untuk ke halaman staff
// Route::get('dashboard/staff', [KaryawanController::class,'index'] );

Route::get('dashboard/staff/tambahStaff',[KaryawanController::class,'show'])->name('show');

// Route::post('dashboard/staff/tambahStaff', [KaryawanController::class,'store'] )->name('store');

// Route::get('dashboard/report', [KaryawanController::class,'index'] );

// Route::get('dashboard/report/tambahPO',[KaryawanController::class,'show'])->name('show');

// Route::post('dashboard/report/tambahPO', [KaryawanController::class,'store'] )->name('validasi');

