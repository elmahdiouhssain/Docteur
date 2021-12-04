<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\FullCalenderController;
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
Auth::routes(['register' => false]);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');

//Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function () {



    

    Route::get('/', [FullCalenderController::class, 'index'])->name('dash.index');

    Route::post('full-calender/action', [FullCalenderController::class, 'action']);


    Route::get('/profile', [DashController::class, 'Profile'])->name('dash.profile');
    //Route::get('/dashboard/profile', [DashboardController::class, 'Showprofile'])->name('changePassword');
    Route::post('/profile/changePassword',[DashController::class, 'postCredentials'])->name('changePassword');

    Route::get('/patients', [DashController::class, 'Patient'])->name('dash.patient');
    Route::post('/patients/nouveau', [DashController::class, 'NewPatient'])->name('dash.newpatient');
    Route::get('/patients/delete/{id}', [DashController::class, 'delClient'])->name('dash.delpatient');
    Route::get('/patients/edit/{id}', [DashController::class, 'showClient'])->name('dash.showpatient');
    Route::post('/patients/edit/{id}', [DashController::class, 'editPatient'])->name('dash.editclient');

    //Route::get('/historique', [DashController::class, 'Historique'])->name('dash.historique');

    Route::get('/consultation', [DashController::class, 'Consultaions'])->name('dash.consultation');
    Route::post('/consultation/nouvelle', [DashController::class, 'Newconsultation'])->name('dash.newcons');
    Route::get('/consultation/delete/{id}', [DashController::class, 'delCons'])->name('dash.delcons');
    Route::get('/consultation/edit/{id}', [DashController::class, 'showCons'])->name('dash.shocons');
    Route::post('/consultation/edit/{id}', [DashController::class, 'editCons'])->name('dash.editcons');


    Route::get('/ordonnance', [DashController::class, 'Ordonnance'])->name('dash.ordonnance');
    Route::post('/ordonnance/nouvelle', [DashController::class, 'NewOrdonnance'])->name('dash.neword');

    Route::get('/rendez-vous', [DashController::class, 'Rendezvous'])->name('dash.rendezvous');
    Route::post('/rendez-vous/nouveau', [DashController::class, 'NewRendezvous'])->name('dash.newrendezvous');
    Route::get('/rendez-vous/delete/{id}', [DashController::class, 'delRev'])->name('dash.delrendezvous');
    Route::get('/rendez-vous/edit/{id}', [DashController::class, 'showRev'])->name('dash.showrendezvous');
    Route::post('/rendez-vous/edit/{id}', [DashController::class, 'editRev'])->name('dash.editrendezvous');

    Route::get('/access', [DashController::class, 'DroiAccess'])->name('dash.access');
    Route::get('/medicaments', [DashController::class, 'Medicaments'])->name('dash.medicaments');
    Route::get('/payments', [DashController::class, 'Payments'])->name('dash.payments');
    Route::get('/analyse', [DashController::class, 'Analyse'])->name('dash.analyse');
    Route::get('/radiologie', [DashController::class, 'Radiologie'])->name('dash.radiologie');



    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


