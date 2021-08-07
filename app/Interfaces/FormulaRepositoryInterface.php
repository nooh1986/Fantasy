<?php

namespace App\Interfaces;


interface FormulaRepositoryInterface
{
    public function last_result();

    public function create();

    public function store($request);

    public function round_result($request);

    public function ranking();
}