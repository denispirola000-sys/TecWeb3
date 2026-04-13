<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        return response()->json(Venda::with(['cliente','user','itens'])->get());
    }

    public function store(Request $request)
    {
        return Venda::create($request->all());
    }

    public function show(Venda $venda)
    {
        return $venda->load(['cliente','user','itens']);
    }

    public function update(Request $request, Venda $venda)
    {
        $venda->update($request->all());
        return $venda;
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();
        return response()->json(['ok' => true]);
    }
}