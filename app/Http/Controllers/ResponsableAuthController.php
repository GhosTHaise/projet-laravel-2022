<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable;
use Hash;
use Session;

class ResponsableAuthController extends Controller
{
    //
    public function registrationResponsable(){
        return view('authentification.registrationResponsable');
    }
    public function loginResponsable(){
        return view('authentification.loginResponsable');
    }
    public function registerResponsable(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:responsables',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new Responsable();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','vous etes enregistrer');
        }else{
            return back()->with('fail','quelque chose n est pas valide');
        }
    }
    public function loginResponsables(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user = Responsable::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('validation');
            }else{
                return back()->with('fail','Mot de passe ne concorde pas');
            }
        }else{
            return back()->with('fail','cet email n est pas enregistrer');
        }
    }
}
