<?php

use App\Http\Controllers\InmuebleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Models\Inmueble;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



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
    if (Auth::user()) //se valida si esta logueado
        if (Auth::user()->rol == 'admin') //se valida el tipo de usuario
            return redirect('/admin');
        else {
            $inmuebles = DB::table('inmuebles')->get();
            return view('welcome', ['inmuebles' => $inmuebles]);
        }

    else {
        $inmuebles = DB::table('inmuebles')->get();
        return view('welcome', ['inmuebles' => $inmuebles]);
    }
});

Route::get('/admin', function () {
    if (Auth::user()) //se valida si esta logueado
        if (Auth::user()->rol == 'admin'){
            $inmuebles = DB::table('inmuebles')->get();
            return view('admin', ['inmuebles' => $inmuebles]);
        } //se valida el tipo de usuario
            
        else {
            $inmuebles = DB::table('inmuebles')->get();
            return view('welcome', ['inmuebles' => $inmuebles]);
        }

    else {
        $inmuebles = DB::table('inmuebles')->get();
        return view('welcome', ['inmuebles' => $inmuebles]);
    }
});


Route::get('/admin/usuarios', function () {
    if (Auth::user()) //se valida si esta logueado
        if (Auth::user()->rol == 'admin'){
            $users = DB::table('users')->get();
            return view('users', ['users' => $users]);
        } //se valida el tipo de usuario
            
        else {
            $inmuebles = DB::table('inmuebles')->get();
            return view('welcome', ['inmuebles' => $inmuebles]);
        }

    else {
        $inmuebles = DB::table('inmuebles')->get();
        return view('welcome', ['inmuebles' => $inmuebles]);
    }
});

Route::get('/dashboard', function () {
    if (Auth::user()) //se valida si esta logueado
        if (Auth::user()->rol == 'admin') //se valida el tipo de usuario
            return redirect('/admin');
        else {
            $inmuebles = DB::table('inmuebles')->get();
            return view('welcome', ['inmuebles' => $inmuebles]);
        }

    else {
        $inmuebles = DB::table('inmuebles')->get();
        return view('welcome', ['inmuebles' => $inmuebles]);
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/delete/{incidencia}', [IncidenciaController::class, 'delete'])->middleware(['auth'])->name('incidencia.delete');
// Route::get('/reparar/{incidencia}', [IncidenciaController::class, 'reparar'])->middleware(['auth'])->name('incidencia.reparar');
// Route::get('/modificar/{incidencia}', [IncidenciaController::class, 'modificar'])->middleware(['auth'])->name('incidencia.modificar');
// Route::post('/store', [IncidenciaController::class, 'store'])->middleware(['auth'])->name('incidencia.store');
// Route::put('/update/{incidencia}', [IncidenciaController::class, 'update'])->middleware(['auth'])->name('incidencia.update');

// Route::get('/addform', [FormsController::class, 'add'])->middleware(['auth'])->name('form.add');
// Route::get('/updateForm/{incidencia}', [FormsController::class, 'update'])->middleware(['auth'])->name('form.update');

require __DIR__ . '/auth.php';
