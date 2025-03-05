<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $student = auth('student')->user();

        if (!$student) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }
        $enrollments = Enrollment::where('student_id', $student->id)
            ->with(['subject', 'grade'])
            ->get();
        return view('studentInfo.index', compact('student', 'enrollments'));
    }

    public function grades()
    {
        $student = auth('student')->user();

        if (!$student) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }

        $enrollments = Enrollment::where('student_id', $student->id)
            ->with(['subject', 'grade'])
            ->get();

        return view('studentInfo.grade', compact('enrollments'));
    }

    public function logout(Request $request)
    {
        auth('student')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
