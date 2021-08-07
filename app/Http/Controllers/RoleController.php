<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\RoleRepositoryInterface;

class RoleController extends Controller
{
    
    private $Role;

    public function __construct(RoleRepositoryInterface $Role)
    {
        $this->Role = $Role;
    }

    public function index()
    {
        return $this->Role->index();
    }

    
    public function create()
    {
        return $this->Role->create();
    }

    
    public function store(Request $request)
    {
        return $this->Role->store($request);
    }

        
    public function edit($id)
    {
        return $this->Role->edit($id);
    }

    
    public function update(Request $request)
    {
        return $this->Role->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Role->destroy($request);
    }
}
