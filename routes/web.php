<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DestinationsController;
use App\Http\Controllers\GallerysController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VillasController;
use App\Http\Controllers\SuitsController;
use App\Http\Controllers\ServicesController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'form'])->name('contact');
Route::get('/faq', [ContactController::class, 'faq'])->name('faq');





// Créez un groupe de routes en utilisant Route::group
Route::group(['prefix' => 'villas'], function () {
    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/villas', [VillasController::class, 'showVilla'])->name('villas.villas');

    // Cette route correspondra à "/villas/suite"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/suits', [VillasController::class, 'showSuite'])->name('villas.suits');


    // Cette route correspond à "/villas/afriquedusud"
    // Elle sera gérée par la method "showSuite" du controller "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/afdusud', [VillasController::class, 'showAfs'])->name('villas.afdusud');

    // Cette route correspondra à "/villas/birmingham"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/birmingham', [VillasController::class, 'showBirmingham'])->name('villas.birmingham');



    // Cette route correspondra à "/villas/cannes"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/cannes', [VillasController::class, 'showCannes'])->name('villas.cannes');

    // Cette route correspondra à "/villas/hongkong"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/hongkong', [VillasController::class, 'showHongKong'])->name('villas.hongkong');

    // Cette route correspondra à "/villas/lagos"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/lagos', [VillasController::class, 'showLagos'])->name('villas.lagos');



    // Cette route correspondra à "/villas/madrid"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/madrid', [VillasController::class, 'showMadrid'])->name('villas.madrid');


    // Cette route correspondra à "/villas/miami"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/miami', [VillasController::class, 'showMiami'])->name('villas.miami');

    // Cette route correspondra à "/villas/ottawa"
    // Elle sera gérée par la méthode "showSuite" du contrôleur "VillasController"
    // Et elle est nommée "villas.suite"
    Route::get('/ottawa', [VillasController::class, 'showOttawa'])->name('villas.ottawa');
});


// Créez un groupe de routes en utilisant Route::group
Route::group(['prefix' => 'suites'], function () {
    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/london', [SuitsController::class, 'showLondon'])->name('suites.london');

    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/bali', [SuitsController::class, 'showBali'])->name('suites.bali');

    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/tokyo', [SuitsController::class, 'showTokyo'])->name('suites.tokyo');

    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/nottingham', [SuitsController::class, 'showNottingham'])->name('suites.nottingham');


    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/marrakech', [SuitsController::class, 'showMarrakech'])->name('suites.marrakech');

    // Cette route correspondra à "/villas/villa"
    // Elle sera gérée par la méthode "showVilla" du contrôleur "VillasController"
    // Et elle est nommée "villas.villa"
    Route::get('/phuket', [SuitsController::class, 'showPhuket'])->name('suites.phuket');
});



// Groupe de routes pour les services, activités et restaurants
Route::prefix('gallery')->group(function () {
    Route::get('/experiences', [GallerysController::class, 'experiences'])->name('experiences');
    // Route pour afficher les activités

    Route::get('/private-beach', [GallerysController::class, 'privateBeach'])->name('private-beach');
    // Route pour afficher les balade en bateau

    Route::get('/restaurants', [GallerysController::class, 'restaurants'])->name('gallery.restaurants');
    // Route pour afficher les massages

    Route::get('/suites-panoramiques-et-suites-executives', [GallerysController::class, 'suitesPanoramiquesSuitesExecutives'])->name('suites-panoramiques-et-suites-executives');
    // Route pour afficher les restaurants

    Route::get('/suits', [GallerysController::class, 'suits'])->name('gallery.suits');
    // Route pour afficher les services


    Route::get('/villas', [GallerysController::class, 'villas'])->name('gallery.villas');
    // Route pour afficher les weddings

    // Vous pouvez ajouter d'autres routes liées aux services, activités et restaurants ici
});



// Groupe de routes pour les services, activités et restaurants
Route::prefix('services')->group(function () {
    Route::get('/activities', [ServicesController::class, 'activities'])->name('activities');
    // Route pour afficher les activités

    Route::get('/boat', [ServicesController::class, 'boat'])->name('boat');
    // Route pour afficher les balade en bateau

    Route::get('/massage', [ServicesController::class, 'massage'])->name('massage');
    // Route pour afficher les massages

    Route::get('/restaurants', [ServicesController::class, 'restaurants'])->name('restaurants');
    // Route pour afficher les restaurants

    Route::get('/services', [ServicesController::class, 'services'])->name('services');
    // Route pour afficher les services


    Route::get('/wedding', [ServicesController::class, 'wedding'])->name('wedding');
    // Route pour afficher les weddings

    // Vous pouvez ajouter d'autres routes liées aux services, activités et restaurants ici
});


// Groupe de routes pour les destinations et gallery
Route::prefix('destinations')->group(function () {
    Route::get('/destinations', [DestinationsController::class, 'destinations'])->name('destinations');
    // Route pour afficher les activités

    Route::get('/gallery', [DestinationsController::class, 'gallery'])->name('gallery');
});
