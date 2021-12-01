<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    
    //funcao que retorna todos as transacoes
    
    public function showAllTransactions()
    {
        return response()->json(Transaction::all());
    }

    // retorna um unica transacao

    public function showOneTransaction($id)
    {
        return response()->json(Transaction::find($id));
    }

    // cria um nova transacao

    public function create(Request $request)
    { 
        $transaction = Transaction::create($request->all());

        return response()->json($transaction, 201);
    }

    // atualiza transacao - nao necessario

    // public function update($id, Request $request)
    // {
    //     $transaction = Transaction::findOrFail($id);
    //     $transaction->update($request()->all());

    //     return response()->json($transaction, 200);
    // }

    // deleta transacao - nao necessario

    // public function delete($id)
    // {
    //     Transaction::findOrFail($id)->delete();

    //     return response('Comprador deletado com sucesso', 200);
    // }

}