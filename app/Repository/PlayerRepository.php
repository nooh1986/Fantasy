<?php


namespace App\Repository;

use App\Interfaces\PlayerRepositoryInterface;
use App\Models\User;

class PlayerRepository implements PlayerRepositoryInterface 
{
    public function index()
    {
        $players = User::all();
        return view('Backend.Player.index' , compact('players'));
    }
}    