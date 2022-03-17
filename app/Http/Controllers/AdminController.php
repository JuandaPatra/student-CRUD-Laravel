<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function show()
    {
        $students = Student::all();
        return view('admin.show', compact('students'));
    }
    
    public function add()
    {
        return view('admin.addStudent');
    }

    public function insertStudent(Request $request)
    {
        // return $request;
        $slug = Str::slug($request->studentName, '-');
        // return $slug;

        $newStudent = new Student();
        $newStudent->name = $request->studentName;
        $newStudent->slug = $slug;
        $newStudent->gender = $request->gender;
        $newStudent->class = $request->class;
        if($request->file('profilePicture')){
            $file = $request->file('profilePicture');

            // $nama_file = str_replace(" ", "", time() . $file->getClientOriginalName());
            $nama_file = $file->getClientOriginalName();
            $file->move("images/".$slug, $nama_file);
            $newStudent->profile = $nama_file;

        }

        $newStudent->save();

        return redirect('/admin')->with('addProduct', 'data siswa terbaru telah ditambah');

    }

    public function editStudentShow(Student $student)
    {
        return view('admin.editStudent', compact('student'));
    }

    public function editStudent(Student $student, Request $request)
    {

        $slug = Str::slug($request->studentName, '-');

        $editStudent = $student;
        $editStudent->name = $request->studentName;
        $editStudent->slug = $slug;
        $editStudent->gender = $request->gender;
        $editStudent->class = $request->class;
        if($request->file('profilePicture')){
            $file = $request->file('profilePicture');

            $nama_file = $file->getClientOriginalName();
            $file->move("images/".$student->slug, $nama_file);
            $editStudent->profile = $nama_file;

        }

        $editStudent->update();

        
        return redirect('/admin')->with('editStudent', 'data siswa berhasil di ubah');
    }

    public function deleteStudent(Student $student)
    {

        Student::destroy($student->id);

        return redirect('/admin')->with('deleteStudent', 'data siswa berhasil di hapus');
        
    }

    public function studentShow(Student $student)
    {
        return view('admin.studentDetails', compact('student'));
    }
}
