<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => "Agent $i",
                'email' => "agent_$i@agent.com",
                'password' => bcrypt("agent123"),
            ]);
        }

        CustomerFactory::times(100)->create();
    }
}
