<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personnels = Personnel::all();


        return view('personnels.index', [
            "page_title" => "Liste personnels",
            "personnels" => $personnels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Gate::allows("access-admin")){
            abort(401);
        }
        $list_poste = Poste::all();
        return view('personnels.create',[
            "page_title" => "Nouveau personnel",
            "postes" => $list_poste
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' =>  'required',
            'poste' =>  'required'   
        ]);
        $nom =  $request->nom;
        $poste =  $request->poste;
        

        Personnel::create([
            'nom' => $nom,
            'poste_id' => (int)$poste,
        ]);


        return redirect()->route('emp.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $list_poste = Poste::all();
        $personnels = Personnel::find($id);
        return view('personnels.edit',[
            "personnels" => $personnels,
            "postes" => $list_poste
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $emp = Personnel::find($id);

        $nom =  $request->nom;
        $poste_id =  $request->poste;

        $emp->update(['nom' => $nom, 'poste_id' => $poste_id]);

        return redirect()->route('emp.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Personnel::find($id)->delete();
        return redirect()->route('emp.index');
    }
}
