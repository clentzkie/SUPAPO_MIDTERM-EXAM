<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['name' => 'Model', 'description' => 'Handles the data logic and communicates directly with your database tables.'],
            ['name' => 'View', 'description' => 'The HTML templates that define how your application looks to the user.'],
            ['name' => 'Controller', 'description' => 'The brain that processes requests, retrieves data from Models, and loads Views.'],
            ['name' => 'Routes', 'description' => 'The URL definitions that direct users to the correct Controller methods.'],
            ['name' => 'Middleware', 'description' => 'A mechanism for filtering HTTP requests, such as verifying user authentication.'],
            ['name' => 'Blade Templates', 'description' => 'Laravel powerful engine for writing clean PHP logic inside your HTML.'],
            ['name' => 'Migrations', 'description' => 'Version control for your database, allowing you to define table structures in PHP.'],
            ['name' => 'Seeders', 'description' => 'Automated scripts that populate your database tables with sample or initial data.'],
            ['name' => 'Database', 'description' => 'The storage system (like MySQL or SQLite) where all your application information is kept.'],
            ['name' => 'Eloquent ORM', 'description' => 'An easy-to-use database wrapper that lets you work with data as if it were PHP objects.'],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}