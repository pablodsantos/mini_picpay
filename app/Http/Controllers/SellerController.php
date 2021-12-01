<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    
    //funcao que retorna todos os compradores
    
    public function showAllSellers()
    {
        return response()->json(Seller::all());
    }

    // retorna um unico comprador

    public function showOneSeller($id)
    {
        return response()->json(Seller::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sellers'
        ]);

        $seller = Seller::create($request->all());

        return response()->json($seller, 201);
    }

    public function update($id, Request $request)
    {
        $seller = Seller::findOrFail($id);
        $seller->update($request->all());

        return response()->json($seller, 200);
    }

    public function delete($id)
    {
        Seller::findOrFail($id)->delete();

        return response('Vendedor deletado com sucesso', 200);
    }

}