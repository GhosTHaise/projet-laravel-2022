<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Poste;
use Illuminate\Http\Request;

class PostesController extends Controller
{

    public function index()
    {

        $posts = Poste::all();


        return view('posts.index', [
            "posts" => $posts,
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

        $client = Client::find($id);


        return view('clients.edit', compact('client'));
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
        $client = Client::find($id);

        $nom =  $request->nom;
        $description =  $request->description;

        $client->update(['nom' => $nom, 'description' => $description]);

        return redirect()->route('clients.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index');
    }
}
