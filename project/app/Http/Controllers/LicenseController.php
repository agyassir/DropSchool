<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\certificate;
use App\Models\CertifSubscribers;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use PharIo\Manifest\License;

class LicenseController extends Controller
{
    //

    public function all()  {
        $licenses=certificate::all();
        $schools=School::all();
        $categories=Categorie::all();
        return view('license.licences',compact('licenses','schools','categories'));
    }

    public function get($id){
        $license=certificate::find($id);
        $subed=CertifSubscribers::where('certificate_id',$id)->where('user_id',Auth::id())->exists();
        
        return view('license.lDescription',compact('license','subed'));

    }

    public function Subscribe($id){
        $subscribers=CertifSubscribers::create([
            'certificate_id'=>$id,
            'user_id'=>Auth::id()
        ]);
        if($subscribers){
            return redirect()->back()->with('success','you have been subscribed  succssefully');
        }else{
            {
                return redirect()->back()->with('error','your subscription has met some problems, please try again');
            }
        }
    }
    public function UnSubscribe($id){
        $subscribers=CertifSubscribers::where('certificate_id',$id)->where('user_id',Auth::id())->first();
        $unsubscribers=$subscribers->delete();
        if($unsubscribers){
            return redirect()->back()->with('success','you have been unsubscribed  succssefully');
        }else{
            {
                return redirect()->back()->with('error','your unsubscription has met some problems, please try again');
            }
        }
    }
}
