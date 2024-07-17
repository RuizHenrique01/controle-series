<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    //
    public function index(){
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        $html = '<ul>';
        foreach($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        return view("listar-series", [
            'series' => $series
        ]);
    }
}
