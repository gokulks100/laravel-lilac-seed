<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Designation;
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
        $departments = [
            ['Name' => 'Marketing'],
            ['Name' => 'Sales'],
            ['Name' => 'IT'],
            ['Name' => 'HR'],
            ['Name' => 'Finance'],
        ];

        $designations = [
            ['Name' => 'Manager'],
            ['Name' => 'Software Engineer'],
            ['Name' => 'Executive'],
            ['Name' => 'Assistant'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }

        foreach ($designations as $designation) {
            Designation::create($designation);
        }

        \App\Models\User::factory(10)->create();

    }
}
