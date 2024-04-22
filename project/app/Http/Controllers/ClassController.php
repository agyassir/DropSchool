<?php

namespace App\Http\Controllers;

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


   
        
    
}
