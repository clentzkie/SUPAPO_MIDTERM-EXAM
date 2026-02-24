<?php

// app/Models/Feature.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model {
    // Explicitly link to the table name from your screenshot
    protected $table = 'tbl_features';
    
    protected $fillable = ['name', 'description'];
}
