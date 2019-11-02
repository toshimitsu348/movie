<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class constellationController extends Controller
{   
    public function index() {
        return view('constellation');
    }

    public function calculate(Request $request) {
        $month = $request->month;
        $day = $request->day;
        if($month == 3 && 21 <= $day && $day <= 31) {
          $constellation = 'おひつじ座';

        }elseif($month == 4 && 1 <= $day && $day <=19 ) {
          $constellation = 'おひつじ座';

        }elseif($month == 4 && 20 <= $day && $day <= 31) {
          $constellation = 'おうし座';

        }elseif($month == 5 && 1 <= $day && $day <= 20) {
          $constellation = 'おうし座';

        }elseif($month == 5 && 21 <= $day && $day <= 31) {
          $constellation = 'ふたご座';

        }elseif($month == 6 && 1 <= $day && $day <= 21) {
          $constellation = 'ふたご座';

        }elseif($month == 6 && 22 <= $day && $day <= 31) {
          $constellation = 'かに座';

        }elseif($month == 7 && 1 <= $day && $day <= 22) {
          $constellation = 'かに座';

        }elseif($month == 7 && 23 <= $day && $day <= 31) {
          $constellation = 'しし座';

        }elseif($month == 8 && 1 <= $day && $day <= 22) {
          $constellation = 'しし座';

        }elseif($month == 8 && 23 <= $day && $day <= 31) {
          $constellation = 'おとめ座';

        }elseif($month == 9 && 1 <= $day && $day <= 22) {
          $constellation = 'おとめ座';

        }elseif($month == 9 && 23 <= $day && $day <= 31) {
          $constellation = 'てんびん座';

        }elseif($month == 10 && 1 <= $day && $day <= 23) {
          $constellation = 'てんびん座';

        }elseif($month == 10 && 24 <= $day && $day <= 31) {
          $constellation = 'さそり座';

        }elseif($month == 11 && 1 <= $day && $day <= 22) {
          $constellation = 'さそり座';

        }elseif($month == 11 && 23 <= $day && $day <= 31) {
          $constellation = 'いて座';

        }elseif($month == 12 && 1 <= $day && $day <= 21) {
          $constellation = 'いて座';

        }elseif($month == 12 && 22 <= $day && $day <= 31) {
          $constellation = 'やぎ座';

        }elseif($month == 1 && 1 <= $day && $day <= 19) {
          $constellation = 'やぎ座';

        }elseif($month == 1 && 20 <= $day && $day <= 31) {
          $constellation = 'みずがめ座';

        }elseif($month == 2 && 1 <= $day && $day <= 18) {
          $constellation = 'みずがめ座';

        }elseif($month == 2 && 19 <= $day && $day <= 31) {
          $constellation = 'うお座';

        }elseif($month == 3 && 1 <= $day && $day <= 20) {
          $constellation = 'うお座';
        } else {
          $constellation = '';
        }

        return view('constellation', ['constellation' => $constellation]);
    }
}