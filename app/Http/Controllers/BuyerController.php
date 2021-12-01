<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    
    //funcao que retorna todos os compradores
    
    public function showAllBuyers()
    {
        return response()->json(Buyer::all());
    }

    // retorna um unico comprador

    public function showOneBuyer($id)
    {
        return response()->json(Buyer::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:buyers'
        ]);

        $buyer = Buyer::create($request->all());

        return response()->json($buyer, 201);
    }

    public function update($id, Request $request)
    {
        $buyer = Buyer::findOrFail($id);
        $buyer->update($request->all());

        return response()->json($buyer, 200);
    }

    public function delete($id)
    {
        Buyer::findOrFail($id)->delete();

        return response('Comprador deletado com sucesso', 200);
    }

}