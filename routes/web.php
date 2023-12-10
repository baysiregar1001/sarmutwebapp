<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use Inertia\Inertia;

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

// ROUTE UNTUK HALAMAN HOME
Route::get('/', function () {
    return view('profile.home.index', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

// ROUTE UNTUK HALAMAN VISI MISI
Route::get('/visi', function () {
    return view('profile.home.visimisi', [
        "title" => "Visi dan Misi",
        "active" => 'visi'
    ]);
});

// ROUTE UNTUK HALAMAN SEJARAH RSU
Route::get('/sejarah', function () {
    return view('profile.home.sejarah', [
        "title" => "Sejarah",
        "active" => 'sejarah'
    ]);
});

// ROUTE UNTUK HALAMAN RAWAT INAP
Route::get('/inap', function () {
    return view('profile.home.rawatinap', [
        "title" => "Rawat Inap",
        "active" => 'inap'
    ]);
});

// ROUTE UNTUK HALAMAN RAWAT JALAN
Route::get('/jalan', function () {
    return view('profile.home.rawatjalan', [
        "title" => "Rawat Jalan",
        "active" => 'jalan'
    ]);
});

// ROUTE UNTUK HALAMAN STRUKTUR ORGANISASI
Route::get('/struktur', function () {
    return view('profile.home.struktur', [
        "title" => "Struktur Organisasi",
        "active" => 'struktur'
    ]);
});


// ROUTE UNTUK HALAMAN AKREDITASI
Route::get('/akreditasi', function () {
    return view('profile.home.akreditasi', [
        "title" => "Akreditasi",
        "active" => 'akreditasi'
    ]);
});

// ROUTE UNTUK HALAMAN Rujukan
Route::get('/rujukan', function () {
    return view('profile.home.rujukan', [
        "title" => "Pelayanan Rujukan",
        "active" => 'rujukan'
    ]);
});

// ROUTE UNTUK HALAMAN IGD
Route::get('/igd', function () {
    return view('profile.home.igd', [
        "title" => "Instalasi Gawat Darurat",
        "active" => 'igd'
    ]);
});

// ROUTE UNTUK HALAMAN IPI
Route::get('/ipi', function () {
    return view('profile.home.ipi', [
        "title" => "Instalasi Pelayanan Intensif",
        "active" => 'ipi'
    ]);
});

// ROUTE UNTUK HALAMAN REHABILITASI MEDIS
Route::get('/rehabilitasimedis', function () {
    return view('profile.home.rehabilitasimedis', [
        "title" => "Rehabilitasi Medis",
        "active" => 'rehabilitasi medis'
    ]);
});

// ROUTE UNTUK HALAMAN RADIOLOGI
Route::get('/radiologi', function () {
    return view('profile.home.radiologi', [
        "title" => "Radiologi",
        "active" => 'radiologi'
    ]);
});

// ROUTE UNTUK HALAMAN INSTALASI GIZI
Route::get('/instalasigizi', function () {
    return view('profile.home.instalasigizi', [
        "title" => "Instalasi Gizi",
        "active" => 'instalasigizi'
    ]);
});

// ROUTE UNTUK HALAMAN FARMASI
Route::get('/farmasi', function () {
    return view('profile.home.farmasi', [
        "title" => "Farmasi",
        "active" => 'farmasi'
    ]);
});

// ROUTE UNTUK HALAMAN GENERAL CHECKUP
Route::get('/pemeriksaan', function () {
    return view('profile.home.pemeriksaan', [
        "title" => "General Check-Up",
        "active" => 'Pemeriksaan'
    ]);
});

// ROUTE UNTUK HALAMAN INFORMASI PRAKTEK DOKTER
Route::get('/praktekdokter', function () {
    return view('profile.home.praktekdokter', [
        "title" => "Infromasi Praktek Dokter",
        "active" => 'praktekdokter'
    ]);
});

// ROUTE UNTUK HALAMAN INFORMASI RAWAT JALAN
Route::get('/informasirawatjalan', function () {
    return view('profile.home.informasirawatjalan', [
        "title" => "Infromasi Pendaftaran Rawat Jalan",
        "active" => 'informasirawatjalan'
    ]);
});

// ROUTE UNTUK HALAMAN INFORMASI RAWAT INAP
Route::get('/informasirawatinap', function () {
    return view('profile.home.informasirawatinap', [
        "title" => "Infromasi Pendaftaran Rawat Inap",
        "active" => 'informasirawatinap'
    ]);
});


// ROUTE UNTUK HALAMAN ARTIKEL KESEHATAN
Route::get('/artikelkesehatan', function () {
    return view('profile.home.artikelkesehatan', [
        "title" => "Artikel Kesehatan",
        "active" => 'artikelkesehatan'
    ]);
});



// ROUTE UNTUK HALAMAN ARTIKEL RUMAH SAKIT
Route::get('/artikelrumahsakit', function () {
    return view('profile.home.artikelrumahsakit', [
        "title" => "Artikel Event Rumah Sakit",
        "active" => 'artikelrumahsakit'
    ]);
});



// ROUTE UNTUK HALAMAN LABORATORIUM
Route::get('/laboratorium', function () {
    return view('profile.home.laboratorium', [
        "title" => "Laboratorium",
        "active" => 'Laboratorium'
    ]);
});

// ROUTE UNTUK HALAMAN KAMAR OPERASI
Route::get('/kamaroperasi', function () {
    return view('profile.home.kamaroperasi', [
        "title" => "Kamar Operasi",
        "active" => 'kamaroperasi'
    ]);
});

// ROUTE UNTUK HALAMAN REHABILITASI MEDIS
Route::get('/kamaroperasi', function () {
    return view('profile.home.kamaroperasi', [
        "title" => "Kamar Operasi",
        "active" => 'kamaroperasi'
    ]);
});



// ROUTE UNTUK HALAMAN ABOUT
Route::get('/about', function () {
    return view('profile.about', [
        "title" => "About",
        "active" => 'about',
        "name" => "RSU Sarmut Pakam",
        "email" => "sarmutpakam@gmail.com"
    ]);
});


// ROUTE UNTUK HALAMAN BLOG
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);

// ROUTE UNTUK HALAMAN SINGLE POST
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// ROUTE HALAMAN LIST CATEGORIES
Route::get('/categories', function () {
    return view('profile.categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

// ROUTE UNTUK LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// ROUTE UNTUK LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// ROUTE UNTUK REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ROUTE UNTUK DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// ROUTE UNTUK DASHBOARD POST
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// ROUTE UNTUK CATEGORY
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
