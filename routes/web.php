<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\FooterController;
use App\Imports\AlumniImport;
use App\Exports\AlumniExport;
use App\Imports\SiswaImport;
use App\Exports\SiswaExport;
use App\Models\Siswa;

// ... sisa kode
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sekolahs', App\Http\Controllers\SekolahController::class);

Route::resource('ekstrakulikulers', App\Http\Controllers\EkstrakulikulerController::class);

Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);

Route::resource('tendiks', App\Http\Controllers\TendikController::class);

Route::resource('programs', App\Http\Controllers\ProgramController::class);

Route::resource('hargas', App\Http\Controllers\HargaController::class);

Route::resource('alumnis', App\Http\Controllers\AlumniController::class);

Route::post('alumnis/import', [AlumniController::class, 'import'])->name('alumnis.import');
Route::get('/exportexcelalumni', [AlumniController::class, 'export'])->name('alumnis.export');
Route::delete('/deleteAll', [AlumniController::class, 'deleteAll'])->name('alumnis.deleteAll');

Route::resource('prestasis', App\Http\Controllers\PrestasiController::class);

Route::resource('siswas', App\Http\Controllers\SiswaController::class);

Route::delete('siswas/deleteAll', [SiswaController::class, 'deleteAll'])->name('siswas.deleteAll');
  
Route::get('/exportexcel', [SiswaController::class, 'exportexcel'])->name('siswas.exportexcel');
   
Route::post('/importexcel', [App\Http\Controllers\SiswaController::class, 'importexcel'])->name('siswas.importexcel');

Route::delete('deleteall', [App\Http\Controllers\SiswaController::class, 'deleteAll'])->name('siswas.deleteAll');

Route::get('/header', [App\Http\Controllers\FrontendController::class, 'header']);


Route::get('/footer', [\App\Http\Controllers\FooterController::class, 'show']);

Route::get('/profilsekolah', [App\Http\Controllers\FrontendController::class, 'profilsekolah']);

Route::get('/navbar', [App\Http\Controllers\FrontendController::class, 'navbar']);

Route::get('/beranda', [App\Http\Controllers\FrontendController::class, 'beranda']);

Route::get('/profil', [App\Http\Controllers\FrontendController::class, 'profil']);

Route::get('/kegiatan', [App\Http\Controllers\FrontendController::class, 'kegiatan']);

Route::get('/keuangan', [App\Http\Controllers\FrontendController::class, 'keuangan']);

Route::get('/ekstrakulikuler', [App\Http\Controllers\FrontendController::class, 'ekstrakulikuler']);

Route::get('/prestasi', [App\Http\Controllers\FrontendController::class, 'prestasi']);

Route::get('/fasilitasSekolah', [App\Http\Controllers\FrontendController::class, 'fasilitasSekolah']);

Route::get('/tendik', [App\Http\Controllers\FrontendController::class, 'tendik']);

//coba

Route::get('/kegiatan', [App\Http\Controllers\FrontendController::class, 'kegiatan']);

Route::get('/ekstrakurikuler', [App\Http\Controllers\FrontendController::class, 'ekstrakurikuler']);

Route::get('/prestasi', [App\Http\Controllers\FrontendController::class, 'prestasi']);

Route::get('/keuangan', [App\Http\Controllers\FrontendController::class, 'keuangan']);

Route::get('/ekstrakulikuler', [App\Http\Controllers\FrontendController::class, 'ekstrakulikuler']);

Route::get('/tendik', [App\Http\Controllers\FrontendController::class, 'tendik']);

// Route::get('/fasilitas', [App\Http\Controllers\FrontendController::class, 'fasilitas']);

Route::resource('kegiatans', App\Http\Controllers\KegiatanController::class);

Route::resource('persyaratans', App\Http\Controllers\PersyaratanController::class);

Route::resource('visis', App\Http\Controllers\VisiController::class);

Route::resource('misis', App\Http\Controllers\MisiController::class);

Route::resource('tentangs', App\Http\Controllers\TentangController::class);