<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockIns = StockOut::latest()->paginate(10);

        return view('stockout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stockout.create');
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

        StockOut::create([
            'item_name' => $request->item_name,
            'qty'       => $request->qty,
            'date'      => $request->date,
            'note'      => $request->note,
        ]);

        return redirect()
            ->route('stock-out.index')
            ->with('success', 'Stock Out berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StockOut $stockOut)
    {
        return view('stockout.edit', compact('stockOut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StockOut $stockOut)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'qty'       => 'required|integer|min:1',
            'date'      => 'required|date',
            'note'      => 'nullable|string',
        ]);

        $stockOut->update([
            'item_name' => $request->item_name,
            'qty'       => $request->qty,
            'date'      => $request->date,
            'note'      => $request->note,
        ]);

        return redirect()
            ->route('stockout.index')
            ->with('success', 'Stock Out berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StockOut $stockOut)
    {
        $stockOut->delete();

        return redirect()
            ->route('stockout.index')
            ->with('success', 'Stock Out berhasil dihapus');
    }
}
