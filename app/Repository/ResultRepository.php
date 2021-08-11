<?php

namespace App\Repository;


use App\Models\User;
use App\Models\Round;
use App\Models\Result;
use App\Interfaces\ResultRepositoryInterface;


class ResultRepository implements ResultRepositoryInterface 
{
    public function index()
    {
        $results = Result::all();
        return view('Backend.Result.index' , compact('results'));
    }

    public function create()
    {
        $players = User::all();
        $rounds = Round::all();
        return view('Backend.Result.create' , compact('players' , 'rounds'));
    }

    public function store($request)
    {
        $data['round_id'] = $request->round_id;
        $data['user_id']  = $request->user_id;
        $data['points']   = $request->points;
        $data['neg']      = $request->neg;
        $data['goal']     = $request->goal;
        $data['ongoal']   = $request->ongoal;
        $data['total']    = $request->points - $request->neg;

        Result::create($data);

        $scores = Result::where('round_id',$request->round_id)->orderBy('total' , 'DESC')->orderBy('goal' , 'DESC')->orderBy('ongoal' , 'ASC')->get();

        foreach($scores as $index => $key)
        {
            
            if($index == 0)
            {
                $data1['score']  = 25;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 1)
            {
                $data1['score']  = 18;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 2)
            {
                $data1['score']  = 15;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 3)
            {
                $data1['score']  = 12;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 4)
            {
                $data1['score']  = 10;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 5)
            {
                $data1['score']  = 8;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 6)
            {
                $data1['score']  = 6;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 7)
            {
                $data1['score']  = 4;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 8)
            {
                $data1['score']  = 2;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 9)
            {
                $data1['score']  = 0;
                Result::findorfail($key->id)->update($data1);
            }
        }    
        toastr()->success('تم حفظ البيانات بنجاح');
        return redirect()->route('Result.index');
    }
    
    public function edit($id)
    {
        $players = User::all();
        $rounds = Round::all();
        $result = Result::findOrfail($id);
        return view('Backend.Result.edit' , compact('players' , 'rounds' , 'result'));
    }

    public function update($request)
    {
        $result = Result::findOrfail($request->id);

        $data['round_id'] = $request->round_id;
        $data['user_id']  = $request->user_id;
        $data['points']   = $request->points;
        $data['neg']      = $request->neg;
        $data['goal']     = $request->goal;
        $data['ongoal']   = $request->ongoal;
        $data['total']    = $request->points - $request->neg;

        $result->update($data);

        $scores = Result::where('round_id',$request->round_id)->orderBy('total' , 'DESC')->orderBy('goal' , 'DESC')->orderBy('ongoal' , 'ASC')->get();

        foreach($scores as $index => $key)
        {
            
            if($index == 0)
            {
                $data1['score']  = 25;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 1)
            {
                $data1['score']  = 18;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 2)
            {
                $data1['score']  = 15;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 3)
            {
                $data1['score']  = 12;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 4)
            {
                $data1['score']  = 10;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 5)
            {
                $data1['score']  = 8;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 6)
            {
                $data1['score']  = 6;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 7)
            {
                $data1['score']  = 4;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 8)
            {
                $data1['score']  = 2;
                Result::findorfail($key->id)->update($data1);
            }

            if($index == 9)
            {
                $data1['score']  = 0;
                Result::findorfail($key->id)->update($data1);
            }
        }    

        toastr()->success('تم تعديل البيانات بنجاح');
        return redirect()->route('Result.index');
    }

    public function destroy($request)
    {
        try
        {
            Result::findorfail($request->id)->delete();

            toastr()->error('تم حذف البيانات بنجاح');
            return redirect()->route('Result.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    