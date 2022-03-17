<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function show(Student $student)
    {
        return view('admin.addPortofolio', compact('student'));
    }
}
