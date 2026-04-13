<?php

namespace App\Http\Controllers;

use App\Models\ItemVenda;
use Illuminate\Http\Request;

class ItemVendaController extends Controller
{
    public function index()
    {
        return response()->json(ItemVenda::all());
    }

    public function store(Request $request)
    {
        return ItemVenda::create($request->all());
    }

    public function show(ItemVenda $itemVenda)
    {
        return $itemVenda;
    }

    public function update(Request $request, ItemVenda $itemVenda)
    {
        $itemVenda->update($request->all());
        return $itemVenda;
    }

    public function destroy(ItemVenda $itemVenda)
    {
        $itemVenda->delete();
        return response()->json(['ok' => true]);
    }
}