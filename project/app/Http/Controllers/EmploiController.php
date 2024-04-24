<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class EmploiController extends Controller
{
    //

    public function store (Request $request, $id){
        // dd($request);

        $request->validate([
               'day'=>'required|integer',
               'start'=>'required',
               'end'=>'required'
        ]);

        $emploi=Emploi::create([
            'begin'=>$request->start,
            'end'=>$request->end,
            'classe_id'=>$id,
            'date_id'=>$request->day
        ]);
        if($emploi){
            return redirect()->back()->with('success','the course has been created succssefully');
        }else{
            
            }
        }

        public function destroy($id){
            $emplois=Emploi::find($id);
            $emploi=$emplois->delete();
            if($emploi){
                return redirect()->back()->with('success','the course has been created succssefully');
            }else{
                dd($emplois);
                }

        }
}
