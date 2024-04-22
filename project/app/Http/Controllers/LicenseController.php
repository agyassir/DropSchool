<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\certificate;
use App\Models\School;
use Illuminate\Http\Request;
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
        return view('license.lDescription',compact('license'));

    }
}
