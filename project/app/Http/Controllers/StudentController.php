<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\Cours;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $subjects=Subject::all();
        $certificates=certificate::with('school')->get();
        $course=Cours::first();

        // dd($certificates[0]->school);
        $data=[
            'subjects'=>$subjects,
            'certificates'=>$certificates,
            'course'=>$course,
            'user'=>$course->abs
        ];
        return view('welcome',$data);
    }

    public function profile($id){
        return view('profil.student');
            
    }
}
