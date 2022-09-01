<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $message = Post::where("id_sender","=",Auth::user()->id)
        ->orwhere("email_destinataire","=",Auth::user()->email)
        ->orderBy("updated_at","DESC")
        ->get() ?? [[
            "updated_at" => now()
        ]];
        return view("messages",[
            "messages_dispo" => $message,
            "mouth" => ["Jan","Fev","Mar","Avr","Mai","Jui","Jul","Aou","Sep","Oct","Nov","Dec"]
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
            "content" => "required|min:1",
            "email_dest" => "required|min:10",
            "objet" => "required|min:5"
        ]);

        Post::create([
            "id_sender" => Auth::user()->id,
            "content" => $request->content,
            "email_destinataire" => $request->email_dest,
            "objet" => $request->objet,
            
        ]);
        session()->flash('success');

        return redirect()->route('mailbox.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Post::where("id_sender","=",Auth::user()->id)
        ->orwhere("email_destinataire","=",Auth::user()->email)
        ->orderBy("updated_at","DESC")
        ->get();
        $actual_message = Post::find($id);
        $destinataire = User::where("email","=","$actual_message->email_destinataire")->get();
        return view("messages",[
            "messages_dispo" => $message,
            "actual_message" => $actual_message,
            "destinataire" => $destinataire[0]->name,
            "mouth" => ["Jan","Fev","Mar","Avr","Mai","Jui","Jul","Aou","Sep","Oct","Nov","Dec"]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
