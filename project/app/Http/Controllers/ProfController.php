<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\class_enroled;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Course;
use App\Models\Date;
use App\Models\Level;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{
    //

    public function index($id)
    {
        $user = User::find($id);
        return view('profil.prof', compact('user'));
    }

    public function courses($id)
    {
        $user = User::find($id);
        // dd($user->profs[0]->courses);
        return view('subject.SC', compact('user'));
    }

    public function dash()
    {
        $user = Auth::user();
        $courses = Cours::where('prof', Auth::id())->get();
        $categories = Categorie::all();
        // dd($courses[0]->purchased->count());
        return view('dashboard.prof', compact('courses', 'categories'));
    }

    public function classes()
    {
        $classes = User::find(Auth::id())->classes;
        $subjects = Subject::all();
        $levels = Level::all();
        // dd($levels[0]->branche);
        // dd($classes[0]->enrolleds->count());
        return view('dashboard.prof', compact('classes', 'subjects', 'levels'));
    }

    public function class($id)
    {
        $classe = Classe::find($id);
        $days = Date::all();
        return view('classe.classe', compact('classe', 'days'));
    }

    public function Sdelete(Request $request ,$id){
        $student=class_enroled::where('classe_id',$id)->where('user_id',$request->student)->first();
        $delete=$student->delete();
        if($delete){
            return redirect()->back()->with('success','the student has been removed succssefully');
        }else{
            {
                return redirect()->back()->with('error','the student deletion has met some problems please try again');
            }
        }
    }
}
