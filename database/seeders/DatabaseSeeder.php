<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if ($_SERVER['argv'][1] !== 'team-db:migrate') {
            $this->call(StoredEventsTableSeeder::class);
            return Artisan::call('event-sourcing:replay',[
                '--stored-event-model' => 'App\\Models\\EloquentStoredEvent',
                '-n' => true,
            ]);
        }

        #iseed_start

        #iseed_end
    }
}
