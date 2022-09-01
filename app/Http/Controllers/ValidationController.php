<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use App\Models\Conge;
use App\Http\Controllers\ResponsableAuthController;
use Session;

class ValidationController extends Controller
{
    //
    public function validation()
    {   
        $data = array();{
            if(Session::has('loginId'));
            $data = Responsable::where('id','=',Session::get('loginId'))->first();
        }
        $conge = Conge::all();
        return view('conge.validation',compact('conge','data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('loginResponsable');
        }
    }
}
