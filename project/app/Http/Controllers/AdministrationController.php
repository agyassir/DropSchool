<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    //

    public function index(){
        $user=Auth::user()->administrator;
       
        $certif=certificate::where('provider',$user[0]->school->id)->get();
        // dd($subscribers[0]->subscribers);
        $subs=0;
        foreach($certif as $certi){
            $subs+=$certi->subscribers->count();
        }
        // dd($subs);
        return view('dashboard.administrator',compact('user','subs'));
    }

    public function Cstore(Request $request){
        $user=Auth::user()->administrator;
        $request->validate([
            'price'=>'required',
            'desc'=>'required',
            'name'=>'required'
        ]);

        $certif=certificate::create([
            'title'=>$request->name,
            'description'=>$request->desc,
            'prix'=>$request->price,
            'provider'=>$user[0]->school->id
        ]);

        if($certif){
            return redirect()->back()->with('success','the certificat has been created succssefully');
        }else{
            {
                return redirect()->back()->with('error','the certificat creation has met some problems please try again');
            }
        }
    }

    public function Cedit(Request $request, $id){
        $request->validate([
            'price'=>'required',
            'desc'=>'required',
            'name'=>'required'
        ]);
        $certif=certificate::find($id);
        $certif->title=$request->name;
        $certif->description=$request->desc;
        $certif->prix=$request->price;
        $update=$certif->save();
        if($update){
            return redirect()->back()->with('success','the certificat has been updated succssefully');
        }else{
            {
                return redirect()->back()->with('error','the certificat  has met some problems please try again');
            }
        }

    }

    public function detail($id){
        $details=Detail::where('certificate_id',$id)->get();
        
        return view('dashboard.details',compact('details','id'));
    }

    public function Dstore(Request $request, $id){
        $details=Detail::create([
            'steps'=>$request->desc,
            'certificate_id'=>$id
        ]);
        if($details){
            return redirect()->back()->with('success','the certificat has been updated succssefully');
        }else{
            {
                return redirect()->back()->with('error','the certificat  has met some problems please try again');
            }
        }
    }

    public function Dedit(Request $request, $id){
        $detail=Detail::find($id);
        $detail->steps=$request->desc;
        $save=$detail->save();
        if($save){
            return redirect()->back()->with('success','the detail has been updated succssefully');
        }else{
            {
                return redirect()->back()->with('error','the detail  has met some problems please try again');
            }
        }
    }

   
}
