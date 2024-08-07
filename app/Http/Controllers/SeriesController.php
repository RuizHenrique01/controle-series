<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    //
    public function index(){
        $series = Serie::all();

        return view("series.index", [
            'series' => $series
        ]);
    }


    public function create(){
        return view("series.create");
    }

    public function store(Request $request){
        $nomeSerie = $request->input("nome");
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect("/series");
    }
}
