<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ResultRequest;
use App\Interfaces\ResultRepositoryInterface;

class ResultController extends Controller
{
    
    private $Result;

    public function __construct(ResultRepositoryInterface $Result)
    {
        $this->Result = $Result;
    }
    
    public function index()
    {
        return $this->Result->index();
    }

    
    public function create()
    {
        return $this->Result->create();
    }

    
    public function store(ResultRequest $request)
    {
        return $this->Result->store($request);
    }

        
    public function edit($id)
    {
        return $this->Result->edit($id);
    }

    
    public function update(ResultRequest $request)
    {
        return $this->Result->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Result->destroy($request);
    }
}
