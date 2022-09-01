<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;

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
}
?>