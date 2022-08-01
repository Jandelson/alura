<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //$id = $request->get('id');
        $series = [
            'Person',
            'Sintonia',
            'La casa de Papel'
        ];

        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    } 
}
