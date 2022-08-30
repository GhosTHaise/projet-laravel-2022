<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Client;
use App\Models\Personnel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $number_client = Client::all()->count();
        $number_personnel = Personnel::all()->count();
        $number_poste = Poste::all()->count();
        #dd($number_client);
        return view("dashboard",[ 
            "page_title" => "Dashboard",
            "nombre_client" => $number_client,
            "nombre_personnel" => $number_personnel,
            "nombre_poste" => $number_poste

        ]);
    }
}
