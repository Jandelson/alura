<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    private $serie;

    public function __construct(Serie $serie)
    {
        $this->serie = $serie;
    }
    public function index()
    {
        $series = $this->serie->all();
        return view('series.index', ['series' => $series]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $this->serie->create(['name' => $name]);
        return redirect('/series'); 
    }
}
