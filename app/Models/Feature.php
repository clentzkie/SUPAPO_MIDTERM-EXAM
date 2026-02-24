<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    // 1. Tell Laravel to use the table name from your screenshot
    protected $table = 'tbl_features';

    // 2. Allow the seeder to insert data into these columns
    protected $fillable = ['name', 'description'];
}