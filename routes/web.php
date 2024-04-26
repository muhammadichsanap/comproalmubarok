<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyProfileController; // Added for Company Profile
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('sekolahs', App\Http\Controllers\SekolahController::class);

Route::resource('ekstrakulikulers', App\Http\Controllers\EkstrakulikulerController::class);

Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);

Route::resource('tendiks', App\Http\Controllers\TendikController::class);

Route::resource('programs', App\Http\Controllers\ProgramController::class);

Route::resource('hargas', App\Http\Controllers\HargaController::class);

Route::resource('alumnis', App\Http\Controllers\AlumniController::class);

Route::resource('prestasis', App\Http\Controllers\PrestasiController::class);

Route::resource('visiMisis', App\Http\Controllers\Visi_misiController::class);

Route::resource('videos', App\Http\Controllers\VideoController::class);



Route::resource('siswas', App\Http\Controllers\SiswaController::class);

Route::get('/siswas/import', [SiswaController::class, 'showImportForm'])->name('siswas.import');
Route::post('/siswas/import', [SiswaController::class, 'importExcelData'])->name('siswas.import');

Route::get('/header', [App\Http\Controllers\FrontendController::class, 'header']);

Route::get('/footer', [\App\Http\Controllers\FrontendController::class, 'footer']);


Route::resource('kegiatans', App\Http\Controllers\KegiatanController::class);




Route::resource('visiMisis', App\Http\Controllers\Visi_misiController::class);
