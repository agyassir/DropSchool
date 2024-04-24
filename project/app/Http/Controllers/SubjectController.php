<?php

namespace App\Http\Controllers;

use App\Models\class_enroled;
use App\Models\Classe;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    //
    public function Subject($id){
        return view('subject.choosing',['id'=>$id]);
    }
    public function HS($id){
        $subject=Subject::find($id);
        $classes=Classe::where('subject_id',$id)->get();
        if(Auth::check()){
        $enrolled=class_enroled::where('classe_id',$id)->where('user_id',Auth::id())->exists();
        return view('subject.HS',compact('classes','subject','enrolled'));
        }
        return view('subject.HS',compact('classes','subject'));
        
    }

    public function SC($id){
        $course=Course::where('Subject_id',$id)->get();
        //  dd($course);
        $data=[
            'courses'=>$course,
        ];
        return view('subject.SC',$data);
    }
}
