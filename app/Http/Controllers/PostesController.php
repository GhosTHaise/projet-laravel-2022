<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostesController extends Controller
{

    public function index()
    {
        $liste_poste = DB::table("postes")
        ->leftjoin("personnels","postes.id","=","personnels.poste_id")
        ->selectRaw("postes.*,count(personnels.poste_id) as nombres_personnels")
        ->groupBy('postes.id')
        ->get();

        return view('posts.index', [
            "postes" => $liste_poste,
            "page_title" => "Liste postes"
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create',[
            "page_title" => "Creer un poste"
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

        $request->validate([
            'titre' =>  'required|min:5',
        ]);


        $titre =  $request->titre;
        Poste::create([
            'nom' => $titre,
            'data_now' => Carbon::now(),
        ]);


        session()->flash('success');


        return redirect()->route('postes.create');
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

        $poste = Poste::find($id);


        return view('posts.edit', compact('poste'));
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
        $poste = Poste::find($id);

        $titre =  $request->titre;
        $poste->update(['nom' => $titre]);

        return redirect()->route('postes.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Poste::find($id)->delete();
        return redirect()->route('clients.index');
    }
}
