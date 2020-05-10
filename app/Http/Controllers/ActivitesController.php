<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
class ActivitesController extends Controller
{
    public function index(){
        $Activites=  Activite::all();
        return view('Activites.index')->with('Activites',$Activites);
    }
    public function create(){
        return "create";
    }
}
