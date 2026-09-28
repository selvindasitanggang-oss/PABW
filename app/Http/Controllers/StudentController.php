<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Selvinda',
                'major' => 'Informatika',
                'age' => 22,
                'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => 'Selvinda',
                'major' => 'Sistem Informasi',
                'age' => 21,
                'courses' => ['UI/UX Design', 'Manajemen Proyek', 'IoT'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}
