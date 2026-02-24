<?php

// app/Http/Controllers/FeatureController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class FeatureController extends Controller
{
    public function index()
    {
        $features = DB::table('tbl_features')->get();
        return view('features', compact('features'));
    }
}