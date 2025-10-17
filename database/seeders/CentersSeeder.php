<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $employeeIds = Employee::pluck('id')->toArray();

        foreach ($employeeIds as $employeeId) {

            if (rand(0, 1)) {
                Center::factory()->create([
                    'employee_manager_id' => $employeeId,
                ]);
            }
        }
    }
}
