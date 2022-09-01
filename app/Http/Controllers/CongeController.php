<?php

namespace App\Http\Controllers;

use App\Models\Conge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CongeController extends Controller
{
    //
    public function index()
    {

        return view('conge.index');
    }
    public function create()
    {
        return view('conge.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'motif'=>'required',
            'date1'=>'required|date|after:tomorrow',
            'date2'=>'required|date|after:date1'
        ]);
        $conge = new Conge;
        $conge->Nom  = $request->input('nom');
        $conge->Prenom  = $request->input('prenom');
        $conge->Email  = $request->input('email');
        $conge->Motif  = $request->input('motif');
        $conge->Depart  = $request->input('date1');
        $conge->Arrive  = $request->input('date2'); 
        
        $res = $conge->save();
        if ($res){
            return back()->with('status','registered successfuly');
        }else{
            return back()->with('fail','something wrong');
        }    
    }
    public function validation()
    {   
        if(!Gate::allows("access-admin")){
            abort(401);
        }
        $conge = Conge::all()->where("status","==","pending");
        return view('conge.validation',compact('conge'));
    }
    public function valide_conge($id){
        
        if(!Gate::allows("access-admin")){
            abort(401);
        }
        $conge = Conge::find($id);
        $conge->update([
            "status" => "valide"
        ]);
        return redirect()->route("conge.validation");
    }
    public function refuse_conge($id){
        if(!Gate::allows("access-admin")){
            abort(401);
        }
        $conge = Conge::find($id);
        $conge->update([
            "status" => "refuse"
        ]);
        return redirect()->route("conge.validation");
    }
}
?>