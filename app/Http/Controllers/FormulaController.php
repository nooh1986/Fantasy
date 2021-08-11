<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\FormulaRepositoryInterface;

class FormulaController extends Controller
{
    
    private $Formula;

    public function __construct(FormulaRepositoryInterface $Formula)
    {
        $this->Formula = $Formula;
    }

   
    public function index()
    {
        return $this->Formula->last_result();
    }

        
    public function create()
    {
        return $this->Formula->record();
    }

    
    public function round_result(Request $request)
    {
        return $this->Formula->round_result($request);
    }


    public function ranking()
    {
        return $this->Formula->ranking();
    }
}
