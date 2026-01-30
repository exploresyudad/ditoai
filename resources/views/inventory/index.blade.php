@extends('layout')

@section('content')
<div class="card">
    <div class="toolbar">
        <div>
            <h2>Inventory Items</h2>
            <p>Manage active stock and reorder points.</p>
        </div>
        <a class="button" href="{{ route('inventory.create') }}">Add New Item</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Reorder Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->sku }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>₱{{ number_format($item->unit_price, 2) }}</td>
                    <td>{{ $item->reorder_level ?? '—' }}</td>
                    <td class="actions">
                        <a class="button secondary" href="{{ route('inventory.edit', $item) }}">Edit</a>
                        <form action="{{ route('inventory.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No items yet. Add your first stock item.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 16px;">
        {{ $items->links() }}
    </div>
</div>
@endsection
