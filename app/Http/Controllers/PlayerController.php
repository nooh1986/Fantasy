<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;
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

    
    public function store(PlayerRequest $request)
    {
        return $this->Player->store($request);
    }

    
    public function update(PlayerRequest $request)
    {
        return $this->Player->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Player->destroy($request);
    }


     public function update_password(Request $request)
    {
        return $this->Player->update_password($request);
    }
}
