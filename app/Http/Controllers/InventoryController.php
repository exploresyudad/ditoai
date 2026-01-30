<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InventoryController extends Controller
{
    public function index(): View
    {
        return view('inventory.index', [
            'items' => Item::query()->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('inventory.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'sku' => ['required', 'string', 'max:50', 'unique:items,sku'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'quantity' => ['required', 'integer', 'min:0'],
            'unit_price' => ['required', 'numeric', 'min:0'],
            'reorder_level' => ['nullable', 'integer', 'min:0'],
        ]);

        Item::create($validated);

        return redirect()
            ->route('inventory.index')
            ->with('status', 'Item added successfully.');
    }

    public function edit(Item $inventory): View
    {
        return view('inventory.edit', [
            'item' => $inventory,
        ]);
    }

    public function update(Request $request, Item $inventory): RedirectResponse
    {
        $validated = $request->validate([
            'sku' => ['required', 'string', 'max:50', 'unique:items,sku,' . $inventory->id],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'quantity' => ['required', 'integer', 'min:0'],
            'unit_price' => ['required', 'numeric', 'min:0'],
            'reorder_level' => ['nullable', 'integer', 'min:0'],
        ]);

        $inventory->update($validated);

        return redirect()
            ->route('inventory.index')
            ->with('status', 'Item updated successfully.');
    }

    public function destroy(Item $inventory): RedirectResponse
    {
        $inventory->delete();

        return redirect()
            ->route('inventory.index')
            ->with('status', 'Item removed successfully.');
    }
}
