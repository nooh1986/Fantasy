<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PlayerRepositoryInterface;

class PlayerController extends Controller
{
    
    private $Player;

    public function __construct(PlayerRepositoryInterface $Player)
    {
        $this->Player = $Player;
    }
    
    public function index()
    {
        return $this->Player->index();
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
