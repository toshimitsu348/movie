<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{   
    public function index() {
        return view('bmi');
    }

    public function calculate(Request $request) {
        $height = $request->height;
        $weight = $request->weight;
        $bmi = round($weight / ($height/100)**2, 2);
        return view('bmi', ['bmi' => $bmi]);
    }
}
