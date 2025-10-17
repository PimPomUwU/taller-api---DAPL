<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Employee;
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
        // User::factory(10)->create();

/*         User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        Employee::factory(50)->create();
        //Center::factory(50)->create();

        $this->call([
            //EmployeesSeeder::class,
            CentersSeeder::class,

        ]);
    }
}
