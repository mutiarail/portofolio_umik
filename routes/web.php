<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/wedding', [PageController::class, 'weddingIndex'])->name('wedding.index');
Route::get('/lamaran', [PageController::class, 'lamaran'])->name('lamaran');
Route::get('/team', [PageController::class, 'team'])->name('team');

Route::get('/wedding/{venue}', [PageController::class, 'venue'])->name('wedding.venue');
Route::get('/gallery/{slug}', [PageController::class, 'gallery'])->name('gallery.show');

// (Opsional) redirect URL lama agar link .html tetap bisa dibuka
Route::redirect('/index.html', '/');
Route::redirect('/wedding.html', '/wedding');
Route::redirect('/Lamaran.html', '/lamaran');
Route::redirect('/team.html', '/team');
Route::redirect('/wedding_Al-azar.html', '/wedding/al-azar');
Route::redirect('/wedding_atyasa.html', '/wedding/atyasa');
Route::redirect('/wedding_golden.html', '/wedding/golden');
Route::redirect('/wedding_Km7.html', '/wedding/km7');
Route::redirect('/wedding_pusri.html', '/wedding/pusri');
Route::redirect('/wedding_santika.html', '/wedding/santika');
Route::redirect('/wedding_Soma.html', '/wedding/soma');
Route::redirect('/wedding_taciro.html', '/wedding/taciro');
Route::redirect('/wedding_TheSultan.html', '/wedding/thesultan');
Route::redirect('/wedding_TheZuri.html', '/wedding/thezuri');
