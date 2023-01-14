<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;

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

Route::middleware('auth')->group(function(){

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/home/', [HomeController::class, 'index']);

    Route::get('/docs', [HomeController::class, 'docs']);
    Route::get('/docs/', [HomeController::class, 'docs']);

    Route::get('/docs-public', [HomeController::class, 'docsPublic']);
    Route::get('/docs-public/', [HomeController::class, 'docsPublic']);

    Route::post('/docs', [HomeController::class, 'store']);
    Route::post('/docs-public', [HomeController::class, 'store']);

    Route::get('/violations', [HomeController::class, 'violations']);
    Route::get('/violations/', [HomeController::class, 'violations']);

    Route::get('/achievement', [HomeController::class, 'achievement']);
    Route::get('/achievement/', [HomeController::class, 'achievement']);

    Route::get('/notes', [HomeController::class, 'notes']);
    Route::get('/notes/', [HomeController::class, 'notes']);

    // Route::get('/student', [HomeController::class, 'notes']);
    // Route::get('/student/', [HomeController::class, 'notes']);

    Route::get('/student', function(){
        return redirect(env('APP_URL') . "/notes");
    });

    Route::post('/student', [HomeController::class, 'kppsSiswa']);
    Route::post('/student/', [HomeController::class, 'kppsSiswa']);

    Route::post('/student/pelanggaran', [HomeController::class, 'tambahPelanggaran']);
    Route::post('/student/pelanggaran/', [HomeController::class, 'tambahPelanggaran']);

    Route::post('/student/prestasi', [HomeController::class, 'tambahPrestasi']);
    Route::post('/student/prestasi/', [HomeController::class, 'tambahPrestasi']);

    Route::post('/student/catatan', [HomeController::class, 'tambahCatatan']);
    Route::post('/student/catatan/', [HomeController::class, 'tambahCatatan']);

    Route::get('/mm', [HomeController::class, 'mm']);
    Route::get('/mm/', [HomeController::class, 'mm']);

    Route::get('/rpl', [HomeController::class, 'rpl']);
    Route::get('/rpl/', [HomeController::class, 'rpl']);

    Route::get('/pftv', [HomeController::class, 'pftv']);
    Route::get('/pftv/', [HomeController::class, 'pftv']);

    Route::get('/permit', [HomeController::class, 'permit']);
    Route::get('/permit/', [HomeController::class, 'permit']);

    Route::get('/permit-refresh', [HomeController::class, 'permitRefresh']);
    Route::get('/permit-detail', [HomeController::class, 'permitDetail']);
    Route::get('/permit/delete', [HomeController::class, 'permitHapus']);

    Route::post('/permit', [HomeController::class, 'permitUpload']);

    Route::get('/forum', [HomeController::class, 'forum']);
    Route::get('/forum/', [HomeController::class, 'forum']);

    Route::post('/forum', [HomeController::class, 'kirim']);
    Route::get('/forum/delete', [HomeController::class, 'hapusForum']);
    Route::get('/forum/delete-all', [HomeController::class, 'hapusSemua']);

    Route::get('/forum-refresh', [HomeController::class, 'forumRefresh']);
    Route::get('/forum-refresh/', [HomeController::class, 'forumRefresh']);

    Route::get('/account', [HomeController::class, 'account']);
    Route::get('/account/', [HomeController::class, 'account']);

    Route::get('/change-info', [HomeController::class, 'changeInfo']);
    Route::get('/change-info/', [HomeController::class, 'changeInfo']);

    Route::post('/change-info', [HomeController::class, 'changeInfoSystem']);
    Route::post('/change-info/', [HomeController::class, 'changeInfoSystem']);

    Route::post('/change-password', [HomeController::class, 'changePass']);

    Route::get('/help', [HomeController::class, 'help']);
    Route::get('/help/', [HomeController::class, 'help']);

    Route::get('/help-masukan', [HomeController::class, 'helpMasukan']);
    Route::get('/help-masukan/', [HomeController::class, 'helpMasukan']);

    Route::get('/help-refresh', [HomeController::class, 'helpRefresh']);
    Route::get('/help-refresh/', [HomeController::class, 'helpRefresh']);

    Route::post('/help', [HomeController::class, 'tanggapan']);

    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/logout/', [LoginController::class, 'logout']);

    Route::get('delete/{user}/{link}', [HomeController::class, 'delete']);

});

Route::middleware('guest')->group(function(){

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/login/', [LoginController::class, 'index'])->name('login');

    Route::get('/register', [LoginController::class, 'register']);
    Route::get('/register/', [LoginController::class, 'register']);

    // Route::redirect('/register', '/login');
    // Route::redirect('/register/', '/login');

});

Route::controller(KppsController::class)->group(function(){

    Route::get('/siswa', 'index');

});