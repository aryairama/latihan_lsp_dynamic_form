<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testinput extends Controller
{
    public function tambahinput(Request $request)
    {
        $jam = array();
        $arr = array();
        $mapel = array();
        $input = $request->input;
        $nilai = array();
        if ($request->kirim) {
            for ($i = 1 ;$i<= $input;$i++) {
                if ($request->input('nilai'.$i) == "A") {
                    $arr[$i] = 100;
                } elseif ($request->input('nilai'.$i) == "B") {
                    $arr[$i] = 80;
                } elseif ($request->input('nilai'.$i) == "C") {
                    $arr[$i] = 60;
                } elseif ($request->input('nilai'.$i) == "D") {
                    $arr[$i] = 40;
                } elseif ($request->input('nilai'.$i) == "E") {
                    $arr[$i] = 20;
                } elseif ($request->input('nilai'.$i) == "F") {
                    $arr[$i] = 0;
                }
                $nilai[$i] = $request->input('nilai'.$i);
                $jam[$i] = $request->input('jam'.$i);
                $mapel[$i] = $request->input('pelajaran'.$i);
            }
            return view('testinput', \compact('arr', 'input', 'request', 'nilai', 'jam', 'mapel'));
        }
        return view('testinput', \compact('input'));
    }
}
