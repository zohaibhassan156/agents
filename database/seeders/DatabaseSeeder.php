<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $agent1 = User::create([
            'name' => "Agent 1",
            'email' => "agent_1@agent.com",
            'password' => bcrypt("agent123"),
        ]);

        $agent2 = User::create([
            'name' => "Agent 2",
            'email' => "agent_2@agent.com",
            'password' => bcrypt("agent123"),
        ]);

        Customer::factory(10)->create();

        $agent1->customers()->sync([1, 2, 3, 4, 5, 6, 7]);
        $agent2->customers()->sync([4, 5, 6, 7, 8, 9, 10]);
    }
}
