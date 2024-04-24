<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\certificate;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Course;
use App\Models\School;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
    //

    public function index(){
        $classe=Classe::all()->count();
        $certificate=certificate::all()->count();
        $school=School::all()->count();
        $profs=User::where('role',2)->count();
        
        $data=[
            'class'=>$classe,
            'certif'=>$certificate,
            'school'=>$school,
            'profs'=>$profs
        ];
        return view('dashboard.admin',$data);
    }

    public function schools(){
    $schools=School::all();
    // dd($schools[0]->adresse);
        return view('dashboard.school',compact('schools'));
    }

    public function Sstore(Request $request){
        $request->validate([
            'sname'=>'required|string',
            'desc'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'addess'=>'required',
            'city'=>'required',
            'country'=>'required'
        ]);

        $addresse=Adresse::where('city',$request->city)
        ->where('country',$request->country)
        ->where('local',$request->addess)
        ->first();
        if(isNull($addresse)){
            $adrs=Adresse::create([
                'city'=>$request->city,
                'country'=>$request->country,
                'local'=>$request->addess
            ]);
            $aid=$adrs->id;
        }else{
            $aid=$addresse->id;
        }

        $school=School::create([
            'name'=>$request->sname,
            'description'=>$request->desc,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'adresse_id'=>$aid
        ]);

        if($school){
            return redirect()->back()->with('success','the school has been created succssefully');
        }else{
            {
                return redirect()->back()->with('error','the school creation has met some problems please try again');
            }
        }

    }

    public function Sedit(Request $request,$id){

        $request->validate([
            'sname'=>'required|string',
            'desc'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'addess'=>'required',
            'city'=>'required',
            'country'=>'required'
        ]);
        // dd($request);

        $addresse=Adresse::where('city',$request->city)
        ->where('country',$request->country)
        ->where('local',$request->addess)
        ->first();
        if(isNull($addresse)){
            $adrs=Adresse::create([
                'city'=>$request->city,
                'country'=>$request->country,
                'local'=>$request->addess
            ]);
            $aid=$adrs->id;
        }else{
            $aid=$addresse->id;
        }

        $school=School::find($id);

        $school->name=$request->sname;
        $school->description=$request->desc;
        $school->email=$request->email;
        $school->phone=$request->phone;
        $school->adresse_id=$aid;
        $save=$school->save();
        if($save){
            return redirect()->back()->with('success','the school has been updated succssefully');
        }else{
            {
                return redirect()->back()->with('error','the school creation has met some problems please try again');
            }
        }

    }

    public function Sdestroy($id){
        $school=School::find($id);
        $del=$school->delete();
        if($del){
            return redirect()->back()->with('success','the school has been deleted succssefully');
        }else{
            {
                return redirect()->back()->with('error','the school deletion has met some problems please try again');
            }
        }

    }

    public function cours(){
        $cours=Course::all();
        $subjects=Subject::all();
        return view('dashboard.course',compact('cours','subjects'));
    }

    public function Cstore(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subject' => 'required',
            'pdf' => 'required|mimes:pdf', // Max file size in KB (2MB)
        ]);
        $image = $request->file('pdf');
        $path = $image->store("/pdf");
        $cours=Course::create([
            'title'=>$request->title,
            'subject_id'=>$request->subject,
            'pdf'=>$path
        ]);
        if($cours){
            return redirect()->back()->with('success','the cours ahs been added succssefully');
        }else{
            {
                return redirect()->back()->with('error','the function has met some problems please try again');
            }
        }
    
                
          
        
    }
}
