<?php

use App\Http\Controllers\ActiveSearchController;
use App\Http\Controllers\CascadingSelectsController;
use App\Http\Controllers\ClickToEditController;
use App\Http\Controllers\ClickToLoadController;
use App\Http\Controllers\InlineValidationController;
use App\Http\Controllers\LazyLoadingController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\StreamingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::group(['prefix' => 'presentation'], function () {
    Route::get('/{slide}', PresentationController::class);
});

Route::post('/clicked', function () {
    return sprintf("<p><b>%s says: you clicked the button!</b></p>", config()->get('app.name'));
});

Route::get('/info', function () {
    sleep(3);

    return view('presentation.examples.info');
});

Route::get('/animations', function () {
    return '<h2 class="animate__animated animate__backInUp">Ehy it worked!</h2>';
});

Route::view('/new-content', 'presentation.examples.new-content');
Route::view('/initial-content', 'presentation.examples.initial-content');

Route::group(['prefix' => 'examples'], function () {
    Route::view('/', 'examples');

    Route::get('/click-to-edit', [ClickToEditController::class, 'index']);
    Route::get('/click-to-edit/edit', [ClickToEditController::class, 'edit']);
    Route::put('/click-to-edit', [ClickToEditController::class, 'update']);

    Route::get('/click-to-load', [ClickToLoadController::class, 'index']);

    Route::get('/lazy-loading', [LazyLoadingController::class, 'index']);
    Route::get('/lazy-loading/lazy', [LazyLoadingController::class, 'lazy']);

    Route::get('/inline-validation', [InlineValidationController::class, 'index']);
    Route::post('/inline-validation', [InlineValidationController::class, 'store']);

    Route::get('/cascading-selects', [CascadingSelectsController::class, 'index']);
    Route::get('/cascading-selects/dishes', [CascadingSelectsController::class, 'dishes']);

    Route::get('/polling', [PollingController::class, 'index']);
    Route::post('/polling/start', [PollingController::class, 'start']);
    Route::get('/polling/progress', [PollingController::class, 'progress']);

    Route::get('/active-search', [ActiveSearchController::class, 'index']);
    Route::get('/active-search/search', [ActiveSearchController::class, 'search']);

    Route::get('/streaming', [StreamingController::class, 'index']);
    Route::post('/streaming/submit', [StreamingController::class, 'submit']);
    Route::get('/streaming/stream', [StreamingController::class, 'stream']);
});
