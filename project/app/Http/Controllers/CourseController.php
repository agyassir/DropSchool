<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Course;
use App\Models\Prof;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //

    public function index($id)  {
        $course=Cours::find($id);
        // dd($course->abs);
        return view('license.description',compact('course'));
    }

    public function all(){
        $courses=Cours::all();
        return view('subject.all',compact('courses'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|string',
            'desc'=>'required',
            'price'=>'required',
            'categorie'=>'required'
        ]);

        if($request->categorie=="custom"){
        $cat=Categorie::create([
            'name'=>$request->customCategory
        ]);
          $cate=$cat->id;
        }else{
            $cate=$request->categorie;
        }
        $course=Cours::create([
            'title'=>$request->title,
            'description'=>$request->desc,
            'price'=>$request->price,
            'categorie'=>$cate,
            'prof'=>Auth::id(),
        ]);

        if ($course) {
            return redirect()->back()->with('success','the course has been created succssefully');
        }else{
            {
                return redirect()->back()->with('error','the course has met some problems please try again');
            }
        }
    }

    public function download($id){
        $cours=Course::find($id);
        $filePath = public_path( $cours->pdf); // Assuming the PDF files are stored in the storage/app directory
        
    if (file_exists($filePath)) {
        // Return the file with proper headers
        return response()->download($filePath, 'filename.pdf', [], 'inline');
    } else {
        // Handle file not found scenario
        abort(404);
    }
    }
}
