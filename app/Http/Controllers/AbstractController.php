<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

abstract class AbstractController extends Controller
{
    public function olaMundo()
    {
        return ['texto' => 'Ola Mundo!'];
    }
}