<?php

use App\Http\Controllers\Api\ParticipantController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {

    $token = $request->session()->token();

    $token = csrf_token();

});

Route::get('/', function () {
    return view('welcome');
});

// Gerer les regions

Route::get('/region_create', [RegionController::class, "create"]);

Route::post('/region_insert', [RegionController::class, "insert"]);

Route::get('/region_liste', [RegionController::class, "index"]);

Route::get('/region_delete/{id}', [RegionController::class, "destroy"]);

Route::get('/region_update/{id}', [RegionController::class, "edit"]);

Route::put('/region_form_update/{id}', [RegionController::class, "update"]);

// Gerer un participant

Route::post('/new_participant', [ParticipantController::class, "insert"]);

Route::get('/participant_create', [ParticipantController::class, "create"]);
