<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferenciaController extends AbstractController
{
    public function transferir(Request $request)
    {
        return $request->all();
    }
}