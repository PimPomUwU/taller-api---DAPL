<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $employee = new Employee();

        $employee->nif = '12345678A';
        $employee->tlfno = '123456789';
        $employee->num_hijos = 2;

        $employee->save();
    }
}
