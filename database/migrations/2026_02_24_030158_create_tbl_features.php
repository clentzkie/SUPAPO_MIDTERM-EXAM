<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_tbl_features_table.php
   // database/migrations/xxxx_xx_xx_create_tbl_features_table.php
public function up(): void
{
    // Change 'features' to 'tbl_features'
    Schema::create('tbl_features', function (Blueprint $table) { 
        $table->id(); 
        $table->string('name');
        $table->text('description');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_features');
    }
};
