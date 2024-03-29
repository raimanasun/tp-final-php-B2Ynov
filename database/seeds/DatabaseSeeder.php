<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PromoSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(EleveSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
