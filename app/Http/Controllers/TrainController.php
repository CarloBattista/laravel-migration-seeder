<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Home';

        $trains = Train::all();

        return view('pages.home', compact('title', 'trains'));
    }

}
