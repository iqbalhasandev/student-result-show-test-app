<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use App\Models\Subject;
use Maatwebsite\Excel\Facades\Excel;

class ResultController extends Controller
{

    /**
     * Showing the index page
     */
    public function index()
    {
        return \view('result.index');
    }

    /**
     * Showing the all the results with student and subject
     *
     */
    public function showAll()
    {
        //  fetching all the students with results
        $students = Student::with('results')->get();
        // fetching all the subjects with results
        $subjects = Subject::all();
        // return view with the students and subjects
        return \view('result.show-all', \compact('students', 'subjects'));
    }

    /**
     * Showing the all the results with student and subject with pagination
     *
     */
    public function showAllWithPagination()
    {
        //  fetching all the students with results
        $students = Student::with('results')->paginate(5);
        // fetching all the subjects with results
        $subjects = Subject::all();
        // return view with the students and subjects
        return \view('result.show-all-with-pagination', \compact('students', 'subjects'));
    }

    /**
     * Exporting the results to excel
     *
     */
    public function exportToExcel()
    {
        // fetching all the results with student and subject
        $result = Result::with('student', 'subject')->get();
        // exporting the results to excel
        return Excel::download(new \App\Exports\ResultExport($result), 'results.xlsx');
    }
}
