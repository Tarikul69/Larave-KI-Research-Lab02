<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\uicontroller;
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

//Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::group(['middleware'=>'dashboard',], function(){
   //Auth::routes();

   // Route::group([]);
   //Dashboard
   Route::get('taDashboard', [DashboardController::class, 'taDashboard']);
   Route::get('dashboard', [DashboardController::class, 'dashboard']);

   //news
   Route::get('news10', [DashboardController::class, 'news']);
   Route::post('news10', [PrincipalController::class, 'newspost']);
   Route::get('delete/{id}', [PrincipalController::class, 'deletenews']);
   Route::get('editnews/{id}', [PrincipalController::class, 'editnews']);
   Route::post('updatenews/{id}', [PrincipalController::class, 'updatenews']);
   //news-ui-admin 
   //Registration
   //Route::get('register',)
 
   //project
   Route::get('project10', [DashboardController::class, 'project']);
   Route::post('project10', [PrincipalController::class, 'project']);
   Route::get('deleteproject/{id}', [PrincipalController::class, 'deleteproject']);
   Route::get('editproject/{id}', [PrincipalController::class, 'editproject']);
   Route::post('updateproject/{id}', [PrincipalController::class, 'updateproject']);

   //publication
   Route::get('publication10', [DashboardController::class, 'publication']);
   Route::post('publication10', [PrincipalController::class, 'publication']);
   Route::get('deletepublication/{id}', [PrincipalController::class, 'deletepublication']);
   Route::get('editpublication/{id}', [PrincipalController::class, 'editpublication']);
   Route::post('updatepublication/{id}', [PrincipalController::class, 'updatepublication']);


   //team
   Route::get('team10', [DashboardController::class, 'team']);
   Route::get('addteam', [DashboardController::class, 'addteam']);
   Route::post('addteam01', [DashboardController::class, 'addteam01']);
   Route::get('changestatus/{role}', [DashboardController::class, 'changestatus']);
   Route::get('teamDelete/{id}', [DashboardController::class, 'teamDelete']);
   Route::get('edit/{id}', [DashboardController::class, 'editteam']);


});


//##################################
//##################################
//Mail
Route::get('mail', [mailcontroller::class, 'mail']);
//home
Route::get('/', [uicontroller::class, 'home']);
//news
Route::get('news', [uicontroller::class, 'news']);
//Route::get('news11/{id}', [uicontroller::class, 'newsdetails']);
Route::get('news12/{id}', [uicontroller::class, 'news12']);

//project
Route::get('project', [uicontroller::class, 'project']);
Route::get('projectdetails/{id}', [uicontroller::class, 'projectdetails']);
//publication
Route::get('publication', [uicontroller::class, 'publication']);
Route::get('publicationdetails/{id}', [uicontroller::class, 'publicationdetails']);
//team
Route::get('team', [uicontroller::class, 'team']);
//contact
Route::get('contact', [uicontroller::class, 'contact']);
Route::post('email', [mailcontroller::class, 'email']);
//join
Route::get('join', [uicontroller::class, 'join']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

