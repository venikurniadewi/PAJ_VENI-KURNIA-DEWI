<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        \App\Models\Voter::factory(10)->create();

         \App\Models\Voter::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'address' => 'Mastrip 163',
         ]);
    }
}
