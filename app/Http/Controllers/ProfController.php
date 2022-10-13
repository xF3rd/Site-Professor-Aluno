<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;

class ProfController extends Controller
{
        
    public function index() {

        $profs = Prof::all();

        return view('welcome',['profs' => $profs]);
    }


    public function create() {
        return view('prof.create');
    }
}
