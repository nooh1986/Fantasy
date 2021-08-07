<?php

namespace App\Interfaces;


interface PlayerRepositoryInterface
{
    public function index();

    public function update_password($request);

    public function store($request);

    public function update($request);

    public function destroy($request);
}