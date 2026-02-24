<?php

// routes/web.php

use App\Http\Controllers\FeatureController;
use Illuminate\Support\Facades\Route;

Route::get('/features', [FeatureController::class, 'index']);