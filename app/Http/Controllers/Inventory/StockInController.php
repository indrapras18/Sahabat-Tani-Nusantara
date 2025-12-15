<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\StockIn;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockIns = StockIn::latest()->paginate(10);

        return view('stockin.index', compact('stockIns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock-in.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'qty'       => 'required|integer|min:1',
            'date'      => 'required|date',
            'note'      => 'nullable|string',
        ]);

        StockIn::create([
            'item_name' => $request->item_name,
            'qty'       => $request->qty,
            'date'      => $request->date,
            'note'      => $request->note,
        ]);

        return redirect()
            ->route('stock-in.index')
            ->with('success', 'Stock In berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockIn $stockIn)
    {
        return view('stock-in.edit', compact('stockIn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StockIn $stockIn)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'qty'       => 'required|integer|min:1',
            'date'      => 'required|date',
            'note'      => 'nullable|string',
        ]);

        $stockIn->update([
            'item_name' => $request->item_name,
            'qty'       => $request->qty,
            'date'      => $request->date,
            'note'      => $request->note,
        ]);

        return redirect()
            ->route('stock-in.index')
            ->with('success', 'Stock In berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockIn $stockIn)
    {
        $stockIn->delete();

        return redirect()
            ->route('stock-in.index')
            ->with('success', 'Stock In berhasil dihapus');
    }
}
