<?php

namespace App\Repository;

use App\Models\User;
use App\Models\Round;
use App\Models\Result;
use App\Interfaces\FormulaRepositoryInterface;
use App\Models\Total;

class FormulaRepository implements FormulaRepositoryInterface 
{
    
    public function create()
    {
        $rounds = Round::all();
        return view('Backend.Formula.create' , compact('rounds'));
    }


    public function store($request)
    {
        $formulas = Result::where('round_id',$request->id)->orderBy('total' , 'DESC')->orderBy('goal' , 'DESC')->orderBy('ongoal' , 'ASC')->get();
        
       
        foreach($formulas as $index => $key)
        {

            Total::where('result_id',$key->id)->delete();

            if($index == 0)
            {
                $data['count'] = 1;
                $data['user_id'] = $key->user_id;
                $data['total']  = 25;
                $data['result_id'] = $key->id;
            }

            if($index == 1)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 18; 
                $data['result_id'] = $key->id;
            }

            if($index == 2)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 15;
                $data['result_id'] = $key->id; 
            }

            if($index == 3)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 12; 
                $data['result_id'] = $key->id;
            }

            if($index == 4)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 10; 
                $data['result_id'] = $key->id;
            }

            if($index == 5)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 8;
                $data['result_id'] = $key->id; 
            }

            if($index == 6)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 6; 
                $data['result_id'] = $key->id;
            }

            if($index == 7)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 4; 
                $data['result_id'] = $key->id;
            }

            if($index == 8)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 2; 
                $data['result_id'] = $key->id;
            }

            if($index == 9)
            {
                $data['count'] = 0;
                $data['user_id'] = $key->user_id;
                $data['total']  = 0;
                $data['result_id'] = $key->id; 
            }

            Total::Create($data);
        }
        return view('Backend.Formula.index' , compact('formulas'));
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