<?php

use App\Models\Computer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\RemarksController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\FirstStatusController;
use App\Http\Controllers\ForthStatusController;
use App\Http\Controllers\ThirdStatusController;
use App\Http\Controllers\SecondStatusController;
use App\Http\Controllers\MonthlySchedulesController;


Auth::routes();
Route::get('/', [LoginController::class, 'index']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('pagination/fetch_data', [HomeController::class, 'fetch_data']);
Route::get('/search', [HomeController::class, 'find_pc']);
Route::get('search/computer_data', [HomeController::class, 'find_computer']);



Route::get('/dept', [DepartmentsController::class, 'create'])->name('department');
Route::post('/createdept', [DepartmentsController::class, 'store'])->name('store.department');

Route::get('/summary/{dept}', [SummaryController::class, 'show'])->name('summary.department');
Route::get('/summary/{dept}/fetch_year', [SummaryController::class, 'fetch_year'])->name('fetch.year');

Route::get('/computer', [ComputersController::class, 'create'])->name('computer');
Route::post('/createuser', [ComputersController::class, 'store'])->name('store.computer');
Route::get('/computer/{computer}', [ComputersController::class, 'show'])->name('show.computer'); 
Route::get('/computer/{computer}/edit', [ComputersController::class, 'edit']);
Route::patch('/computer/{computer}', [ComputersController::class, 'update'])->name('update.computer'); 

Route::get('/newuser/{computer}', [PostsController::class, 'create'])->name('create.post');
Route::post('/computer/{computer}/posts', [PostsController::class, 'store'])->name('store.post');
Route::patch('/posts/{computer}', [PostsController::class, 'update'])->name('update.post'); 

//Remake
Route::post('/computer/status/{computer}/first', [FirstStatusController::class, 'first']); //store
Route::patch('/firststatus/{first}', [FirstStatusController::class, 'update'])->name('update.first'); //update
Route::post('/computer/status/{computer}/second', [SecondStatusController::class, 'second']); //store
Route::patch('/secondstatus/{second}', [SecondStatusController::class, 'update'])->name('update.second'); //update
Route::post('/computer/status/{computer}/third', [ThirdStatusController::class, 'third']); //store
Route::patch('/thirdstatus/{third}', [ThirdStatusController::class, 'update'])->name('update.third'); //update
Route::post('/computer/status/{computer}/forth', [ForthStatusController::class, 'forth']); //store
Route::patch('/forthstatus/{forth}', [ForthStatusController::class, 'update'])->name('update.forth'); //update

//Remarks Status
Route::post('/computer/{computer}/remark', [RemarksController::class, 'remark'])->name('store.remark'); //store
Route::patch('/remarks/{remark}', [RemarksController::class, 'update'])->name('update.remark'); //update
Route::delete('/remarksdelete/{remark}', [RemarksController::class, 'destroy'])->name('delete.remark');

//Device Status
Route::post('/device/{dept}', [DevicesController::class, 'store'])->name('store.device');
Route::patch('/device/{device}', [DevicesController::class, 'update'])->name('update.device');
Route::delete('/devicedelete/{device}', [DevicesController::class, 'destroy'])->name('delete.device');



//Schedule
Route::get('/schedule', [SchedulesController::class, 'index'])->name('schedule');
Route::get('/createschedule', [SchedulesController::class, 'create'])->name('create.schedule');
Route::post('/storeschedule', [SchedulesController::class, 'store'])->name('store.schedule');
Route::post('/oneweeklyschedule/{monthly}', [MonthlySchedulesController::class, 'oneset'])->name('store.oneweeklyschedule');
Route::post('/twoweeklyschedule/{monthly}', [MonthlySchedulesController::class, 'twoset'])->name('store.twoweeklyschedule');
Route::post('/threeweeklyschedule/{monthly}', [MonthlySchedulesController::class, 'threeset'])->name('store.threeweeklyschedule');
Route::post('/departmentschedule/{weeklydata}', [MonthlySchedulesController::class, 'storesched'])->name('store.deptschedule');
Route::get('/schedule/{monthly}', [SchedulesController::class, 'show'])->name('show.schedule');
Route::patch('/weeklystatus/{weekly}', [SchedulesController::class, 'update'])->name('update.schedule'); 
Route::delete('/statusdelete/{weekly}', [SchedulesController::class, 'destroy'])->name('delete.schedule');



Route::get('/defaultschedule', [SchedulesController::class, 'default'])->name('default.sched');
Route::get('/defaultschedule/february', [SchedulesController::class, 'february'])->name('february');
Route::get('/defaultschedule/march', [SchedulesController::class, 'march'])->name('march');
Route::get('/defaultschedule/april', [SchedulesController::class, 'april'])->name('april');
Route::get('/defaultschedule/may', [SchedulesController::class, 'may'])->name('may');
Route::get('/defaultschedule/june', [SchedulesController::class, 'june'])->name('june');
Route::get('/defaultschedule/july', [SchedulesController::class, 'july'])->name('july');
Route::get('/defaultschedule/august', [SchedulesController::class, 'august'])->name('august');
Route::get('/defaultschedule/september', [SchedulesController::class, 'september'])->name('september');
Route::get('/defaultschedule/october', [SchedulesController::class, 'october'])->name('october');
Route::get('/defaultschedule/november', [SchedulesController::class, 'november'])->name('november');
Route::get('/defaultschedule/december', [SchedulesController::class, 'december'])->name('december');
    