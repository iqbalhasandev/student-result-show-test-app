<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ResultExport implements FromCollection, WithHeadings, WithMapping
{

    protected $subjects;

    public function __construct()
    {
        $this->subjects = Subject::all();
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::with('results')->get();
    }
    public function headings(): array
    {
        $data = [
            'Name',
            'Batch',
        ];
        $data = \array_merge($data, $this->subjects->pluck('name')->toArray());
        return $data;
    }
    /**
     * @var Student $student
     */
    public function map($student): array
    {
        $data = [
            $student->name,
            $student->batch,
        ];
        foreach ($this->subjects as $subject) {
            $data[] = $student->results->where('subject_id', $subject->id)->first()->marks ?? 0;
        }
        return $data;
    }
}
