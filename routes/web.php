<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnWorkController;
use App\Http\Resources\WorkResource;
use App\Models\Work;
use App\Models\Design;
use App\Models\CompanyInformation;
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
    $works = WorkResource::collection(Work::limit(10)->get());
    $designs = Design::all();
    //dd($works);
    return view('welcome.home', compact('works','designs'));
});
Route::get('/about', function () {
    $com = CompanyInformation::all();
    // dd($com);
    return view('welcome.about_me', compact('com'));
});
Route::resource('/ownwork', OwnWorkController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); return view('dashboard');
    })->name('dashboard');

    Route::resource('work',WorkController::class);
    Route::get('work/edit/{id}', [WorkController::class,'edit']);
    Route::get('work/getBtn/{id}', [WorkController::class,'getBtnDel']);
    Route::post('work/imageUpload', [WorkController::class,'fileUpload']);
    Route::post('work/delete', [WorkController::class,'delete'])->name('work.delete');
    Route::post('work/fileupload', [WorkController::class,'fileupload'])->name('work.fileupload');
    Route::post('work/deleteFile', [WorkController::class,'deleteFile'])->name('work.deleteFile');

    Route::resource('design',DesignController::class);
    Route::get('design/show/{id}', [DesignController::class,'show']);
    Route::post('design/deleteFile', [DesignController::class,'deleteFile'])->name('design.deleteFile');


    Route::resource('mycompany', CompanyController::class);
  
    

});
