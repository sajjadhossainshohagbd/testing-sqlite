<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Benchmark;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $batchSize = 100;
        $totalRecords = 1000;

        // for ($i = 0; $i < $totalRecords / $batchSize; $i++) {
        //     User::factory()->count($batchSize)->create();
        // };

        collect(range(1,10000000))->each(function($numbers){
            User::factory()->count(1)->create();
            dump('Creating user '.$numbers);
        });
    }
}
