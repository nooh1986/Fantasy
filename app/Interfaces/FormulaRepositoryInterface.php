<?php

namespace App\Interfaces;


interface FormulaRepositoryInterface
{
    public function last_result();

    public function record();

    public function round_result($request);

    public function ranking();
}