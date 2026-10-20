<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.landing' )-> name('home');


Route::view('/kontak-darurat', 'pages.kontak-darurat' )-> name('kontak-darurat');
Route::view('/peta-kampus', 'pages.peta-kampus' )-> name('peta-kampus');
Route::view('/denah-gedung', 'pages.denah-gedung' )-> name('denah-gedung');
Route::view('/evakuasi', 'pages.evakuasi' )-> name('evakuasi');
Route::view('/edukasi', 'pages.edukasi' )-> name('edukasi');
