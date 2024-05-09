<?php

namespace Database\Seeders;

use App\Models\Api;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Api::factory()->count(50)->create();
        // $api = new Api();
        // $api->title = 'API title';
        // $api->details = 'API details';
        // $api->save();
    }
}
