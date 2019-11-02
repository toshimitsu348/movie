<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AController extends Controller
{   
    public function index() {
        return view('a');
    }

    public function calculate(Request $request) {

        $contributor = $request->contributor;
        $content = $request->content;

        return view('a', ['contributor' => $contributor]);

    }
}
