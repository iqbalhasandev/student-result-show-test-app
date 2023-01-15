<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Maths',
                'status' => 1
            ],
            [
                'name' => 'Science',
                'status' => 1
            ],
            [
                'name' => 'English',
                'status' => 1
            ],
            [
                'name' => 'History',
                'status' => 1
            ],
            [
                'name' => 'Geography',
                'status' => 1
            ],
            [
                'name' => 'Computer',
                'status' => 1
            ]
        ];
        Subject::insert($data);
    }
}
