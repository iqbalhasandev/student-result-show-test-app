<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Rahim',
            'Karim',
            'Rafiq',
            'Kamal',
            'Jamal',
            'Raju',
            'Kaju',
            'Raju',
            'Kaju',
            'Raju',
            'Kaju',

        ];

        $subjects = Subject::all();

        foreach ($data as $name) {
            $students = Student::create([
                'name' => $name,
                'batch' => rand(2012, 2019),
            ]);
            foreach ($subjects as $subject) {
                $students->results()->create([
                    'subject_id' => $subject->id,
                    'marks' => rand(50, 100),
                ]);
            }
        }
    }
}
