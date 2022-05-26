<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Tutee;
use App\Models\Tutor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Tutor::factory(10)->create();
        Member::factory(10)->create();
    }
}
