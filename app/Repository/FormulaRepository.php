<?php

namespace App\Repository;

use App\Models\User;
use App\Models\Round;
use App\Models\Result;
use App\Interfaces\FormulaRepositoryInterface;


class FormulaRepository implements FormulaRepositoryInterface 
{
    
    public function record()
    {
        $records = Result::where('score', 25)->orderBy('round_id', 'ASC')->get();
        return view('Backend.Ranking.record' , compact('records'));
    }
           
    public function ranking()
    {
        $players = User::all();
        return view('Backend.Ranking.ranking' , compact('players'));
    }


    public function round_result($request)
    {
        $rounds = Round::all();
        $formulas = Result::where('round_id',$request->id)->orderBy('total', 'desc')->orderBy('goal' , 'DESC')->orderBy('ongoal' , 'ASC')->get();
        return view('Backend.Formula.result' , compact('formulas' ,'rounds'));
    }


    public function last_result()
    {
        $rounds = Round::all();
        $formulas = Result::orderBy('round_id', 'desc')->orderBy('total' , 'DESC')->orderBy('goal' , 'DESC')->orderBy('ongoal' , 'ASC')->take(10)->get();
        return view('Backend.Formula.last_result' , compact('formulas' ,'rounds'));
    }
   
}    