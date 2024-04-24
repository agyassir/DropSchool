<?php

namespace App\Http\Controllers;

use App\Models\class_enroled;
use App\Models\Classe;
use App\Models\Emploi;
use App\Models\Subject;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    //

    public function stream(){
        return view('chat.class');
    }

    public function store(Request $request){
        $request->validate([
            'subject'=>'required',
            'level'=>'required|integer',
            'price'=>'required'
        ]);
        

        if($request->subject=="custom"){
            $subject=Subject::create([
                'name'=>$request->customSubject,
                'niveau'=>$request->level
            ]);
            $sid=$subject->id;
        }else{
            $sid=$request->subject;
        }


        $class=Classe::create([
              'subject_id'=>$sid,
              'user_id'=>Auth::id(),
              'price'=>$request->price,
        ]);
        if($class){
            return redirect()->back()->with('success','the class has been created succssefully');
        }else{
            {
                return redirect()->back()->with('error','the class has met some problems please try again');
            }
        }

    }

    public function Enroll($id){
        $class=class_enroled::create([
            'classe_id'=>$id,
            'user_id'=>Auth::id()
        ]);

        if($class){
            return redirect()->back()->with('success','you have been enrolled succssefully');
        }else{
            {
                return redirect()->back()->with('error','your enrollement has met some problems please try again');
            }
        }
    }
    public function unEnroll($id){
        $clas=class_enroled::where('classe_id',$id)
            ->where('user_id',Auth::id())->first();
$class=$clas->delete();
        if($class){
            return redirect()->back()->with('success','you have been unenrolled succssefully');
        }else{
            {
                return redirect()->back()->with('error','your unenrollement has met some problems please try again');
            }
        }
    }

   
        
    
}
