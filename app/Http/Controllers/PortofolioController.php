<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Student;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function show(Student $student)
    {
        return view('admin.addPortofolio', compact('student'));
    }

    public function insertPortofolio(Student $student, Request $request)
    {
        // return $request;
        
        $newPortofolio = new Portofolio();

        $newPortofolio->student_id = $student->id;
        $newPortofolio->title = $request->title;
        $newPortofolio->slug = str_replace(" ", "", $student->slug . time() );
        if($request->file('image')){
            $file = $request->file('image');

            // $nama_file = $file->getClientOriginalName();
            $nama_file = str_replace(" ", "", $student->slug . '-'. time() . $file->getClientOriginalName());
            $file->move("images/".$student->slug, $nama_file);
            $newPortofolio->image = $nama_file;

        }

        $newPortofolio->save();

        return redirect('/admin')->with('editStudent', 'data siswa berhasil di ubah');
    }
}
