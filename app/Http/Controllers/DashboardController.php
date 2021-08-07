<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Total;
use App\Models\Result;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function top()
    {
        $top    = Result::orderBy('total', 'DESC')->first();
        $low    = Result::orderBy('total', 'Asc')->first();
        $top1   = Result::orderBy('points', 'DESC')->first();

        return view('Backend.dashboard' , compact('top' , 'low' , 'top1'));
    }


    public function record()
    {
        $records = Total::where('count', 1)->get();
        return view('Backend.Ranking.record' , compact('records'));
    }
    
    
}


        